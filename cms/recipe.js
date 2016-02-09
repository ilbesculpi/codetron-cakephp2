
var RECIPE_PATH = RECIPES_PATH + '/cakephp2/cms';
var TEMPLATES_PATH = RECIPE_PATH + '/templates';
var ASSETS_PATH = RECIPE_PATH + '/assets';
var CMS_PATH = OUTPUT_PATH + '/Plugin/Cms';

var fs = require('fs-extra');
var async = require('async');
var inflect = require('inflect');

var burner = require(BASE_PATH   + '/burner');
var auth   = require(RECIPE_PATH + '/auth');
var assets = require(RECIPE_PATH + '/assets');
var crud   = require(RECIPE_PATH + '/crud');

module.exports = {
    
    cook: function(config, json, callback) {
        
        console.info('[INFO] cakephp2.cms');
        
        async.series([
            function(callback) {
                console.log('[DEBUG] inflating json...');
                inflate(config, json, function(inflated) {
                    json = inflated;
                    callback();
                });
            },
            function(callback) {
                console.log('[DEBUG] initializing Cms Plugin...');
                init(config, json, callback);
            },
            function(callback) {
                console.log('[DEBUG] generating main templates...');
                cookAppTemplates(config, json, callback);
            },
            function(callback) {
                console.log('[DEBUG] generating auth templates...');
                auth.cook(config, json, callback);
            },
            function(callback) {
                console.log('[DEBUG] generating crud templates...');
                crud.cook(config, json, callback);
            },
            function(callback) {
                console.log('[DEBUG] copying assets...');
                assets.cook(config, json, callback);
            },
            function(callback) {
                console.log('[DEBUG] installing dependencies...');
                assets.install(callback);
            }
        ], function(error, results) {
            callback(error);
        });
        
    }
    
};

var inflate = function(config, json, callback) {
    
    for( var m in json.models ) {
        
        var model = json.models[m];
        model.title = inflect.titleize(inflect.pluralize(model.name));
        model.controller = inflect.decapitalize(inflect.pluralize(model.name));
        
        for( var f in model.fields ) {
            var field = model.fields[f];
            if( field.primaryKey ) {
                field.control = "hidden";
                continue;
            }
            if( !field.required ) {
                field.required = false;
            }
            if( !field.control ) {
                field.control = "text";
            }
            if( !field.label ) {
                field.label = inflect.titleize(field.name);
            }
        }
    }
    
    callback(json);
};

var init = function(config, json, callback) {
    async.series([
        function(callback) {
            fs.emptyDir(CMS_PATH, callback);
        },
        function(callback) {
            burner.mkdirs([
                CMS_PATH,
                CMS_PATH + '/Config',
                CMS_PATH + '/Controller',
                CMS_PATH + '/Model',
                CMS_PATH + '/View',
                CMS_PATH + '/View/Auth',
                CMS_PATH + '/View/Dashboard',
                CMS_PATH + '/View/Elements',
                CMS_PATH + '/View/Helper',
                CMS_PATH + '/View/Layouts',
                CMS_PATH + '/webroot'
            ], callback);
        }
    ], function(error, results) {
        callback(error);
    });
};

var cookAppTemplates = function(config, json, callback) {
    async.parallel([
        function(callback) {
            var source = TEMPLATES_PATH + '/controllers/app_controller.php';
            var dest = CMS_PATH + '/Controller/CmsAppController.php';
            var params = {};
            burner.template(source, dest, params, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/models/app_model.php';
            var dest = CMS_PATH + '/Model/CmsAppModel.php';
            var params = {};
            burner.template(source, dest, params, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/controllers/dashboard_controller.php';
            var dest = CMS_PATH + '/Controller/DashboardController.php';
            var params = {};
            burner.template(source, dest, params, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/config/routes.php';
            var dest = CMS_PATH + '/Config/routes.php';
            var params = {};
            burner.template(source, dest, params, callback);
        },
		function(callback) {
            var source = TEMPLATES_PATH + '/config/settings.php';
            var dest = CMS_PATH + '/Config/settings.php';
            var params = {
				CMS: config.name
			};
            burner.template(source, dest, params, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/views/elements';
            var dest = CMS_PATH + '/View/Elements';
            fs.copy(source, dest, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/views/layouts';
            var dest = CMS_PATH + '/View/Layouts';
            fs.copy(source, dest, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/views/helpers/theme_helper.php';
            var dest = CMS_PATH + '/View/Helper/ThemeHelper.php';
            fs.copy(source, dest, callback);
        },
        function(callback) {
            var source = TEMPLATES_PATH + '/views/dashboard/home.ctp';
            var dest = CMS_PATH + '/View/Dashboard/home.ctp';
            var params = {
                models: json.models
            };
            burner.template(source, dest, params, callback);
        }
    ], function(error, results) {
        callback(error);
    });
};
