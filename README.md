E ai pessoal, beleza ?! 

Seguinte, esse readme é para detalhar algumas coisas sobre a forma que vamos usar o git nesse projeto.

Então, esse projeto conta com duas branchs sendo a 1ª dev e a 2ª homolog.

dev -> Toda implementação deve ser feita por ela, para ser testada e validada antes de subir. Aqui podemos errar e errar quantas vezes necessário.

homolog -> A homolog vai estar ligada ao heroku, onde vamos subir simulando o deploy do projeto.

Como funciona o fluxo do git usando mais de uma branch ? 
Isso é bem tranquilo, como vamos trabalhar a maior parte do tempo na branch dev o localhost vai ser onde vamos testar tudo! Quando testado e validado
iremos usar os seguintes comandos: 

git add .
git commit -m "<comentario sobre as alterações>"
git push origin dev

Após isso vamos testar mais algumas vezes (não precisa ser muito pra não haver enrolação) e vamos subir pra homolog: 

git checkout homolog
git merge dev
git push origin homolog 

E ai podemos testar no heroku para ver se está tudo em ordem. 

----------------------------------------------------------------------------------------------------------------------------------
A branch homolog já está ligada com o heroku! O deploy automático já foi habilitado e está disponivel no link: 
https://projeto-unifeob-open.herokuapp.com/
----------------------------------------------------------------------------------------------------------------------------------
Instalações recomendadas: 

instalar o npm e o composer. Se precisarmos de mais algo vou atualizando o readme!!!

Boa pessoal, mão na massa!!!! Precisando é só chamar 