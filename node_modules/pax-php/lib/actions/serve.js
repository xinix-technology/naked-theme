var spawn = require('child_process').spawn;

module.exports = function(logger) {
    "use strict";
    var args = ['-S', 'localhost:8000'];
    if (this.argv.t) {
        args.push('-t');
        args.push(this.argv.t);
    }
    var cmd = spawn('php', args, { stdio: 'inherit' });
};