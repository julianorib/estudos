## Resource Request e Resource Limits

Para testar o consumo de CPU e Memória, 
tem um projeto que é possível simular o aumento do CPU e Memória.

https://console.cloud.google.com/gcr/images/kubernetes-e2e-test-images/GLOBAL/resource-consumer:1.5/details

Para utiliza-lo, execute requisições do tipo POST.

curl --data "megabytes=20&durationSec=30" http://resource-consumer-service/ConsumeMem

curl --data "millicores=130&durationSec=30" http://resource-consumer-service/ConsumeCPU