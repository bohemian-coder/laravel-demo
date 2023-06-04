# laravel-demo-kubernetesDeployment
A simple laravel app which we will dockerize and deploy to kubernetes -> https://github.com/bohemian-coder/dockerize-laravel-demo

To run this you need : minikube

Base commands: Run from project folder ```demoapp``` - 
``` kubectl apply -f /deployments``` ```kubectl apply -f services```

Quick commands to create pods / services for containers without yaml files :
``` kubectl run <podname> --image=<username>/<imagename>:<imagetag> --port=<port_no> ```
``` kubectl expose pod podname --name=<servicename> --port=<port no> ```
``` kubectl port-forward service/<servicename> forward_to_port:listening_on_port" ```