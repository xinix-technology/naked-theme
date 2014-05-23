var spawn = require('child_process').spawn,
    exec = require('child_process').exec,
    path = require('path'),
    fs = require('fs');

module.exports = function(command, logger) {
    "use strict";

    if (typeof command === 'object') {
        logger = command;
        command = 'install';
    }

    var Q = this.require('q');

    var composer = function() {
        var deferred = Q.defer();
        logger.head('Checking composer...');

        if (fs.existsSync('./composer.phar')) {
            var cmd = spawn('php', ['./composer.phar', 'selfupdate']);
            cmd.stdout.on('data', function(data) {
                logger.log(data.toString().trim());
            });
            cmd.on('close', function() {
                deferred.resolve();
            });
        } else {
            exec('php -r "readfile(\'https://getcomposer.org/installer\');" | php',
                function(error, stdout, stderr) {
                    if (error) {
                        deferred.reject(new Error('PHP not found'));
                    } else {
                        deferred.resolve();
                    }
                }
            );
        }

        return deferred.promise;
    };

    var doComposer = function() {
        var composer,
            deferred = Q.defer();

        logger.head('Running composer...');

        switch(command) {
            case 'install':
                composer = spawn('php', ['./composer.phar', 'install']);
                break;
            case 'update':
                composer = spawn('php', ['./composer.phar', 'update']);
                break;
        }

        if (composer) {
            composer.stdout.on('data', function(data) {
                logger.log(data.toString().trim());
            });
        }

        composer.on('close', function(code) {
            if (code) {
                deferred.reject(new Error('Composer error'));
            } else {
                deferred.resolve();
            }
        });

        return deferred.promise;
    };

    return composer().then(doComposer);

};