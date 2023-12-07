# Projeto para testar permissões (RBAC)

Este é um projeto em csharp que eu clonei do Fabricio Veronez.

Objetos criados:

- deployment
- service (lb)
- service account
- cluster role
- cluster role binding

Ao executar os manifestos, visualize o IP que foi associado ao service e abra-o no navegador.

Clique nas Abas para visualizar as permissões.

Para testar em mais de um namespace, digite na aba do Navegador:

Exemplo
```
http://172.18.255.201/Pod?ns=kube-system
```

