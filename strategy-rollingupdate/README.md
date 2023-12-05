# Projeto simples de Estrategia de Deploy RollingUpdate

- Deploy de um Nginx
- Service ClusterIP Nginx
- Ingress Route com o Traefik

Com essa estratégia de deploy, pode haver um pequeno downtime.\
Deve-se criar um bloco de "strategy" no bloco "spec".\
Definindo a quantidade de replicas que poderá ser superior ao desejado e a quantidade de replicas inferior ao desejado.\
Assim irá substituindo, finalizando a quantidade especificada e criando novos.