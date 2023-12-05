# Projeto simples de Estrategia de Deploy Blue / Green

- Deploy de um Nginx
- Service ClusterIP Nginx
- Ingress Route com o Traefik

Com essa estratégia de deploy, o downtime é zero.\
Isto porque os 2 deploys estão em execução.\
É feito a mudança através do service.\
Há o problema de consumo em dobro dos recursos.

Para utilizar este formato, é necessário criar 2 deploys.
- Deploy v1 
- Deploy v2

Em cada um, deverá colocar uma label com o nome ou número da versão.

No service, deverá colocar a label com o nome ou número da versão também.\
Quando desejar trocar a versão, alterar no service e aplicar.

