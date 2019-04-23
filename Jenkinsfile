pipeline{
        agent any
        stages{
                stage('Inistial Setup'){
                                                                                steps{
                                                                                                sh 'echo Starting..'
                                                                                        }
                                                                                }
                stage('Checking Docker'){
                                                                                steps{
                                                                                                sh 'sudo docker ps'
                                                                                                sh 'pwd'
                                                                                        }
                                                                                }
                                stage ('Build Docker'){
                                                                                steps {
                                                                                                sh 'docker build --tag=php54v2 .'
                                                                                                sh 'sudo docker run -p 80:80 --name phpTEST --rm php54v2'
                                                                                                }
                                                                                }
                                                                stage ('Docker Compose'){
                                                                                steps {
                                                                                                docker stop phpTEST
                                                                                                sudo docker-compose up -d
                                                                                                }
                                }
                }
}
