# WSR
Projeto de um Web Server Redundante.

Para a última fase do processo Seletivo de Trainee 2025 Venko Networks foi apresentada uma avaliação técnica.
Idealizada por André Santos, o projeto consiste em criar um servidor web para exibir dados de um dado host,
onde os dados serão armazenados em duas instâncias de banco de dados, sendo um ativo e o outro passivo, tais 
bancos irão alimentar dois processos do Web Server, para equilibrar a carga dos processos será utilizado o algoritmo
Round Robin. O sistema base deve ser Linux e as demais aplicações devem ser implementados em containers Docker,
por fim o projeto deve ser desenvolvido e entregue no GitHub.

A parte das ferramentas que já foram decididas, as demais são de livre escolha. Abaixo estão as que serão uitilizadas:

- Web Server: Apache2
- Distribuição Linux: KUbuntu 24.04
- Banco de dados: MySQL
- Linguagem de script: C++


