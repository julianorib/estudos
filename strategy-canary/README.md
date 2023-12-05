# Projeto simples de Estrategia de Deploy Canary

- Deploy de um Nginx
- Service ClusterIP Nginx
- Ingress Route com o Traefik

Com essa estratégia de deploy, o downtime é zero, semelhante a Blue/Green.\
Isto porque os 2 deploys estão em execução.\
Porém cada deploy tem um número de Replicas complementando o total desejado.
Não há o problema do consumo de recursos excessivo. 

Para utilizar este formato, é necessário criar 2 deploys.
- Deploy v1 
- Deploy v2

Em cada um, deverá colocar uma label com o nome ou número da versão.\
Se a quantidade de replicas desejada for 5, coloque 4 no versão 1 e 1 no versão 2.

No service, não deve ter a label referenciando versão.

Aplique e monitore.\
Vá alterando a quantidade de replicas até a desejada nos 2 deploys, até que tenha sido substituito a versão.