# Sistema de Cadastro de Produtos

Um projeto desenvolvido afim de testes, tem uma página de Cadastro de Produtos e Visualização destes cadastros.\
Este projeto é feito para utilizar Containers e ser implantado em um cluster Kubernetes.

## App PHP

```
app\src\
```

- Página inicial 
- Página de Visualização de Produtos.
- Página de Cadastro de Produtos.
- Variávies de Ambiente
    - SERVERNAME=bdcadastros-service
    - USERNAME=root
    - PASSWORD=
    - DBNAME=produtos

### Dockerfile

```
app\Dockerfile
```

- Imagem base php:8.2-apache
- Copia-se os arquivos do app
- Instala o modulo para conexão com o BD
- Expoe a porta 80


### Manifestos K8s

```
app\k8s\
```

- Deployment
- Service Load Balancer
- Secret para user e senha do MySQL


## Banco MySQL

```
banco\src\
```

- Cria-se um database chamado produtos
- Cria-se uma tabela chamada produtos
- Cria-se os campos dessa tabela produtos



### Dockerfile

```
banco\Dockerfile
```
- Imagem base mysql
- Copia o script de criação do database e tabela
- Seta a senha do usuário root
- Expoe a porta 3306

### Manifestos K8s

```
banco\k8s\
```
- Deployment
- Service ClusterIP


## Como usar

Faça o clone deste projeto.

```
git clone
```

### Build

Fazer o build das duas imagens personalizadas.

```
docker build -t julianorib/cadastros:v1.0 -f app/Dockerfile app/
```

```
docker build -t julianorib/bdcadastros:v1.0 -f banco/Dockerfile banco/

```

### Subir a imagem para o Repositório

Tenha uma conta no Docker Hub.

<https://hub.docker.com/>


```
docker login
```

```
docker push julianorib/cadastros:v1.0 
```
```
docker push julianorib/bdcadastros:v1.0 
```

### Fazendo o Deply da aplicação no Kubernetes

Executar os manifestos do Kubernetes

```
kubectl apply -R -f app/
kubectl apply -R -f banco/
```

### Verificar os Pods, Deployment e Services

```
kubectl get all
```

### Testando a aplicação

Verifique o EXTERNAL-IP do Service "cadastros-service", coloque este IP no navegador e visualize a Página.

```
kubectl get service
```

Exemplo:
172.18.255.200

