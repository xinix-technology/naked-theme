module.exports = function() {
    var that = this,
        spawn = require('child_process');

    this.task('init', function(logger) {
        return that.exec(['php', 'composer', 'install'], logger).then(function() {
            var bower = spawn('bower', ['install']);
            console.log(bower);
        });
    });

    this.task('serve', function(logger) {
        if (!this.argv.t) {
            this.argv.t = './www';
        }
        return that.exec(['php', 'serve'], logger);
    });
};
