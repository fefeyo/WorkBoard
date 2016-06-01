module.exports = {
    // This is the current environment we're building for.
    // It defaults to local
    env: 'local',

    // This holds the configuration after init is run
    config: {},

    /**
     * Initialize the build configuraiton
     *
     * @param  {object} jsonfile
     * @param  {function} extend
     * @param  {object} yargs
     * @param  {string} path
     * @param  {object} options
     */
    init: function init(jsonfile, extend, yargs, options) {
        // Get the pub configuration file
        var json = jsonfile.readFileSync(options.paths.pub);

        // Initialize the environment & config
        this.config = extend(true, {}, json['*'], json[environment()]);

        // Do certain things for certain environments
        switch ( this.env ) {
            case 'production':
                options.sass.outputStyle = 'compressed';
                break;
        }

        // This gets the current environment
        function environment() {
            if ( yargs.argv.testing ) return this.env = 'testing';
            if ( yargs.argv.staging ) return this.env = 'staging';
            if ( yargs.argv.production ) return this.env = 'production';
            return this.env;
        }
    }
};