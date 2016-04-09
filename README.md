# orotest

Finder Bundle It find the keywords from list of files which are present on uploads/files folder.

Installation Steps
###################

1) Run the below command into your project.

	composer require montu0074i/orotest

2) Put the below line under AppKernel.php file under app folder.

	new BvTestBundle\BvTestBundle(),

3) open yourproject/app/config/routing.yml, put below code in that file.

   bv_test:
   resource: "@BvTestBundle/Resources/config/routing.yml"
   prefix:   /

open your browser and type

  http://localhost/YOUR-PROJECT-NAME/web/app_dev.php/default/index
  
  Now you can search the keywords from the list of files which are present in the "uploads/files" folder.
  
  Please note that if "uploads" folder not there in web directory then please create it.
  
