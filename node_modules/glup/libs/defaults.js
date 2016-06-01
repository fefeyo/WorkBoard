module.exports = {
    sass: {},
    autoprefixer: {},
    jshint: {
        esversion: 6
    },
    plumber: {
        errorHandler: function handleGulpErrors(error) {
            // Configure the error message
            notify.onError({
                title: `${error.name}: ${error.plugin}`,
                message: '<%= error.message %>'
            })(error);

            // Tell gulp to go to the end
            this.emit('end');
        }
    },
    php: {
        base: 'public',
        hostname: '127.0.0.1',
        port: '8000'
    },
    paths: {
        pub: 'pub.json',
        sources: {
            sass: 'resources/sass/app.sass',
            scripts: 'resources/scripts/**/*.js'
        },
        builds: {
            sass: {
                base: 'public',
                filename: 'app.css'
            },
            scripts: {
                base: 'public',
                filename: 'app.js'
            }
        },
        watch: {
            scripts: 'resources/scripts/**/*.js',
            sass: 'resources/sass/**/*.sass',
            reloaders: [
                'public/assets/templates/**/*.html',
                'resources/views/**/*.blade.php',
                'public/builds/local/scripts/app.js'
            ]
        }
    }
};
