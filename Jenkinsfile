pipeline {
    agent any

    environment {
        IMAGE_NAME     = 'php-app-devops'
        IMAGE_TAG      = "build-${BUILD_NUMBER}"
        CONTAINER_NAME = 'php-app-devops-staging'
    }

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/ahmadirfansyah/php-app-devops.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'composer install --no-interaction --prefer-dist'
            }
        }

        stage('Unit Test') {
            steps {
                sh './vendor/bin/phpunit --colors=never'
            }
            post {
                success {
                    echo 'Unit test berhasil!'
                }
                failure {
                    echo 'Unit test gagal!'
                }
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t ${IMAGE_NAME}:${IMAGE_TAG} .'
            }
        }

        stage('Deploy') {
            steps {
                sh 'docker rm -f ${CONTAINER_NAME} || true'
                sh 'docker run -d --name ${CONTAINER_NAME} -p 8081:80 ${IMAGE_NAME}:${IMAGE_TAG}'
                echo 'Aplikasi berjalan di http://localhost:8081'
            }
        }
    }

    post {
        always {
            echo 'Pipeline selesai dijalankan.'
        }
    }
}
