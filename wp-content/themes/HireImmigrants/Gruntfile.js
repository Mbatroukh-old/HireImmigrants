module.exports = function(grunt) {
    require('matchdep').filterDev('grunt-*', './package.json').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Grunt Watch
        watch: {
            options: {
                // reload: true,
                atBegin: true
            },
            css: {
                files: [                    
                    'sass/**/*.scss'
                ],
                tasks: ['sass:dev']
            },
            adminCss: {
                files: ['sass/admin.scss'],
                tasks: ['sass:admin']
            },
            js: {
                files: [
                    'scripts/*.js', 'Gruntfile.js'
                ],
                tasks: ['jshint', 'concat:myjs']
            },
            svg: {
                files: ['i/svg-icons/*.svg'],
                tasks: ['svgstore']
            }
        },

        // Task - JSLint, JSHint
        jshint: {
            all: ['scripts/*.js'],
            config: 'Gruntfile.js'
        },

        // Task - Compile SASS
        sass: {
            options: {
                sourceMap: false
            },
            dev: {
                files: {
                    'css/hire-immigrants.css': 'sass/hire-immigrants.scss'
                }
            },
            admin: {
                files: {
                    'css/admin.css': 'sass/admin.scss'
                }
            }
        },

        // Task - PostCSS
        postcss: {
            options: {
                map: false,
                processors: [
                    require('autoprefixer')({
                        browsers: ['last 4 versions', 'ie >= 9']
                    })/*,
                    require('cssnano')({
                        zindex: false
                    })*/
                ]
            },
            dev: {
                src: 'css/cslife.css'
            },
            admin: {
                src: 'css/admin.css'
            }
        },

        // Task - Merge Scripts
        concat: {
            myjs: {
                src: [
                    'scripts/*.js'
                ],
                dest: 'js/hire-immigrants.js',
            },
            vendor: {
                src: [
                    'bower_components/svg4everybody/dist/svg4everybody.min.js'
                ],
                dest: 'js/vendor.js',
                nonull: true
            },
            vendorScss: {
                src: [
                    'bower_components/normalize.css/normalize.css'
                ],
                dest: 'sass/base/_vendor.scss',
                nonull: true
            }

        },


        // Task - Minify JS
        uglify: {
            vendor: {
                files: {
                    'js/vendor.js': ['js/vendor.js']
                },
                options: {
                    preserveComments: false
                }
            },
            main: {
                files: {
                    'js/hire-immigrants.js': ['js/hire-immigrants.js']
                },
                options: {
                    preserveComments: false,
                    /* sourceMap: true,
		            sourceMapIncludeSources: true,
        			sourceMapName: 'js/rxepay-main.js.map'*/
                }
            }
        },

        // Task Remove Logging
        removelogging: {
            main: {
                dest: 'js/hire-immigrants.js',
                src: 'js/hire-immigrants.js'
            }
        },

        // Task - Create SVG Sprite
        svgstore: {
            options: {
                svg: {
                    xmlns: 'http://www.w3.org/2000/svg',
                    style: 'display: none;',
                    viewBox: '0 0 500 500',
                    x: '0px',
                    y: '0px'
                },
                includeTitleElement: false,
                preserveDescElement: false,
                cleanup: true,
                includedemo: false
            },
            default: {
                files: {
                    'templates/svg-icons.php': ['i/svg-store/*.svg']
                }
            }
        },

        // Task - Copy over Vendor Scripts
        copy: {
            sassInit: {
                files: [{
                    expand: true,
                    // src: 'bower_components/sass-setup/sass/**',
                    cwd: 'bower_components/sass-setup/sass/',
                    src: '**',
                    dest: 'sass/'
                }]
            },
            customSass: {
                files: [{
                    src: 'bower_components/sass-custom/sass/custom/**',
                    dest: 'sass/custom/',
                    expand: true,
                    flatten: true,
                    filter: 'isFile'
                }]
            }
        }       

    }); // grunt.initConfig()

    grunt.registerTask('default', ['watch', 'svgstore']);
    grunt.registerTask('sass-init', ['copy:sassInit']);
    grunt.registerTask('init', ['concat', 'sass', 'postcss']);
    grunt.registerTask('build', ['sass', 'postcss', 'jshint:all', 'concat', 'uglify', 'svgstore', 'removelogging']);    
};