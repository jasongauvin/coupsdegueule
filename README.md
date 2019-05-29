# coupsdegueule
Semaine intenssive PHP. Réseau social "coupsdegueule"

Necessaires : 
Node.js
Yarn : brew install yarn
yarn add sass-loader@^7.0.1 node-sass --dev
Npm

Commencer par :
 cd projects/
 git clone ...
Puis :
 cd my-project/
 composer install 
 npm install
 yarn install
 
 .env : 
 DATABASE_URL=mysql://root:root@127.0.0.1:3306/coupsdegueule
 
 Transferer DB avec sql workbench (public/assets/sql)
 
 run :
 
 bin/console server:run
 
 reload webpack :
 yarn encore dev --watch
 
 
