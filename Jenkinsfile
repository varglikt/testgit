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
												vi 'sudo docker run -p 80:80 --name phpedsi --rm php54v2'
												}
										}
				}
		}
