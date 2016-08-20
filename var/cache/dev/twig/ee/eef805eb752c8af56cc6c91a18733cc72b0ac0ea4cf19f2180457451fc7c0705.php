<?php

/* @css/Script/morrisjs/Gruntfile.js */
class __TwigTemplate_17d48e243623f05c9c2304ae4d59e2841096a28602228fb40515f91c612388cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14086541914e18b9dcda314c1f473f15b15b05cb8c382642a47775654d2e9957 = $this->env->getExtension("native_profiler");
        $__internal_14086541914e18b9dcda314c1f473f15b15b05cb8c382642a47775654d2e9957->enter($__internal_14086541914e18b9dcda314c1f473f15b15b05cb8c382642a47775654d2e9957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@css/Script/morrisjs/Gruntfile.js"));

        // line 1
        echo "module.exports = function (grunt) {
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    coffee: {
      lib: {
        options: { bare: false },
        files: {
          'morris.js': ['build/morris.coffee']
        }
      },
      spec: {
        options: { bare: true },
        files: {
          'build/spec.js': ['build/spec.coffee']
        }
      },
    },
    concat: {
      'build/morris.coffee': {
        options: {
          banner: \"### @license\\n\"+
                  \"<%= pkg.name %> v<%= pkg.version %>\\n\"+
                  \"Copyright <%= (new Date()).getFullYear() %> <%= pkg.author.name %> All rights reserved.\\n\" +
                  \"Licensed under the <%= pkg.license %> License.\\n\" +
                  \"###\\n\",
        },
        src: [
          'lib/morris.coffee',
          'lib/morris.grid.coffee',
          'lib/morris.hover.coffee',
          'lib/morris.line.coffee',
          'lib/morris.area.coffee',
          'lib/morris.bar.coffee',
          'lib/morris.donut.coffee'
        ],
        dest: 'build/morris.coffee'
      },
      'build/spec.coffee': ['spec/support/**/*.coffee', 'spec/lib/**/*.coffee']
    },
    less: {
      all: {
        src: 'less/*.less',
        dest: 'morris.css',
        options: {
          compress: true
        }
      }
    },
    uglify: {
      build: {
        options: {
          preserveComments: 'some'
        },
        files: {
          'morris.min.js': 'morris.js'
        }
      }
    },
    mocha: {
      index: ['spec/specs.html'],
      options: {run: true}
    },
    watch: {
      all: {
        files: ['lib/**/*.coffee', 'spec/lib/**/*.coffee', 'spec/support/**/*.coffee', 'less/**/*.less'],
        tasks: 'default'
      },
      dev: {
        files:  'lib/*.coffee' ,
        tasks: ['concat:build/morris.coffee', 'coffee:lib']
      }
    },
    shell: {
      visual_spec: {
        command: './run.sh',
        options: {
          stdout: true,
          failOnError: true,
          execOptions: {
            cwd: 'spec/viz'
          }
        }
      }
    }
  });

  grunt.registerTask('default', ['concat', 'coffee', 'less', 'uglify', 'mocha', 'shell:visual_spec']);
};
";
        
        $__internal_14086541914e18b9dcda314c1f473f15b15b05cb8c382642a47775654d2e9957->leave($__internal_14086541914e18b9dcda314c1f473f15b15b05cb8c382642a47775654d2e9957_prof);

    }

    public function getTemplateName()
    {
        return "@css/Script/morrisjs/Gruntfile.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* module.exports = function (grunt) {*/
/*   require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);*/
/* */
/*   grunt.initConfig({*/
/*     pkg: grunt.file.readJSON('package.json'),*/
/*     coffee: {*/
/*       lib: {*/
/*         options: { bare: false },*/
/*         files: {*/
/*           'morris.js': ['build/morris.coffee']*/
/*         }*/
/*       },*/
/*       spec: {*/
/*         options: { bare: true },*/
/*         files: {*/
/*           'build/spec.js': ['build/spec.coffee']*/
/*         }*/
/*       },*/
/*     },*/
/*     concat: {*/
/*       'build/morris.coffee': {*/
/*         options: {*/
/*           banner: "### @license\n"+*/
/*                   "<%= pkg.name %> v<%= pkg.version %>\n"+*/
/*                   "Copyright <%= (new Date()).getFullYear() %> <%= pkg.author.name %> All rights reserved.\n" +*/
/*                   "Licensed under the <%= pkg.license %> License.\n" +*/
/*                   "###\n",*/
/*         },*/
/*         src: [*/
/*           'lib/morris.coffee',*/
/*           'lib/morris.grid.coffee',*/
/*           'lib/morris.hover.coffee',*/
/*           'lib/morris.line.coffee',*/
/*           'lib/morris.area.coffee',*/
/*           'lib/morris.bar.coffee',*/
/*           'lib/morris.donut.coffee'*/
/*         ],*/
/*         dest: 'build/morris.coffee'*/
/*       },*/
/*       'build/spec.coffee': ['spec/support/**//* *.coffee', 'spec/lib/**//* *.coffee']*/
/*     },*/
/*     less: {*/
/*       all: {*/
/*         src: 'less/*.less',*/
/*         dest: 'morris.css',*/
/*         options: {*/
/*           compress: true*/
/*         }*/
/*       }*/
/*     },*/
/*     uglify: {*/
/*       build: {*/
/*         options: {*/
/*           preserveComments: 'some'*/
/*         },*/
/*         files: {*/
/*           'morris.min.js': 'morris.js'*/
/*         }*/
/*       }*/
/*     },*/
/*     mocha: {*/
/*       index: ['spec/specs.html'],*/
/*       options: {run: true}*/
/*     },*/
/*     watch: {*/
/*       all: {*/
/*         files: ['lib/**//* *.coffee', 'spec/lib/**//* *.coffee', 'spec/support/**//* *.coffee', 'less/**//* *.less'],*/
/*         tasks: 'default'*/
/*       },*/
/*       dev: {*/
/*         files:  'lib/*.coffee' ,*/
/*         tasks: ['concat:build/morris.coffee', 'coffee:lib']*/
/*       }*/
/*     },*/
/*     shell: {*/
/*       visual_spec: {*/
/*         command: './run.sh',*/
/*         options: {*/
/*           stdout: true,*/
/*           failOnError: true,*/
/*           execOptions: {*/
/*             cwd: 'spec/viz'*/
/*           }*/
/*         }*/
/*       }*/
/*     }*/
/*   });*/
/* */
/*   grunt.registerTask('default', ['concat', 'coffee', 'less', 'uglify', 'mocha', 'shell:visual_spec']);*/
/* };*/
/* */
