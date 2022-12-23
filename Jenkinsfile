pipeline {
    agent {label "glueship" } 
    environment {
        NEXUS_VERSION = "nexus3"
        NEXUS_PROTOCOL = "http"
        NEXUS_URL = "http://192.168.1.127:8081/repository/glue-app/"
        NEXUS_REPOSITORY = "glue-app/"
        NEXUS_CREDENTIAL_ID = "nexusCredentials"
        HOME_DIR = "/root/gluesona/workspace/"
    }
    stages {
        
        stage ('BitBucket Integration & Artifact clean') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], extensions: [], userRemoteConfigs: [[credentialsId: 'gitglue', url: 'https://github.com/nahid210/gluesona']]])
                sh 'rm -rf /GlueDocker@tmp'
                sh 'ls'
                sh 'rm -rf $HOME_DIR/artifact'
                sh 'rm -rf $HOME_DIR/GlueDocker/artifact.tar.gz'
            }
        }
           
        
          stage ('Docker Build') {
            steps {
               // sh 'docker stop $(docker ps -a -q)'
               // sh 'docker rm $(docker ps -a -q)'
                sh 'cd /root/gluesona/workspace/GlueDocker/Docker/glue_in_multicontainer && docker-compose -f docker-compose.yml up -d' 
            }
        }
      stage ('Unit Test') {
           steps {
		       catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
               
                sh 'docker exec  glue-backend ls -la'
                sh 'docker exec  glue-backend php artisan make:test UserTest --unit'
                //sh 'docker exec  glue-backend php artisan test'
                sh 'docker exec  glue-backend php artisan test --testsuite=Unit --stop-on-failure'
		      }
            }
        }
        
             stage ('Larastan and Codeception Test') {
            steps {
                
               // sh 'composer require --dev phpstan/phpstan'
                //sh 'docker exec glue-backend vendor/bin/phpstan analyse bootstrap'
                sh 'docker exec glue-backend vendor/bin/phpstan analyse public'
                sh 'docker exec glue-backend vendor/bin/phpstan analyse stubs'
                sh 'docker exec glue-backend composer require --dev codeception/codeception'
                sh 'docker exec glue-backend composer require codeception/module-phpbrowser --dev'
                sh 'docker exec glue-backend composer require codeception/module-asserts --dev'
            }
        }  
         stage ('CodeCoverage and PHPCS Test') {
            steps {
				catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                sh 'docker exec glue-backend php artisan test --testsuite=Feature --stop-on-failure'
                sh 'docker exec glue-backend vendor/bin/phpunit --coverage-html reports/' 
                sh 'docker exec glue-backend composer require --dev squizlabs/php_codesniffer'
               // sh 'docker exec glue-backend vendor/bin/phpcs app database storage bootstrap'
                sh 'docker exec glue-backend vendor/bin/phpcbf app database storage bootstrap'
				sh "exit 1"
				}
            }
        }
        
         stage ('Build') {
            steps {
                sh 'cp -r $HOME_DIR/GlueDocker  $HOME_DIR/artifact'
                sh 'tar -czvf $HOME_DIR/artifact.tar.gz  $HOME_DIR/artifact'
                sh 'mv $HOME_DIR/artifact.tar.gz $HOME_DIR/GlueDocker'
                sh 'ls -la'
            }
        }
        stage ('Upload Artifact'){
             steps {
                  sh 'curl -v -u ${nexus_user}:${nexus_pass} --upload-file artifact.tar.gz ${NEXUS_URL}'
            }
        }    
        stage ('Acceptance Test') {
            steps {
				catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                //sh 'docker exec glue-backend vendor/bin/codecept generate:cest Acceptance bootstrap'
                sh 'docker exec glue-backend vendor/bin/codecept run --steps' 
                // sh 'docker exec glue-backend vendor/bin/codecept bootstrap'
                //sh 'docker exec glue-backend vendor/bin/phpunit --coverage-html reports/'
                //sh 'docker exec glue-backend php artisan test --coverage'
                //sh 'docker exec glue-backend php artisan test --coverage --min=80.3'
				//sh "exit 1"
				}
            }
        }
	}

}
