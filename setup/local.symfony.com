<VirtualHost *:80>
    ServerName local.symfony.com
    ServerAlias www.local.symfony.com

    DocumentRoot /var/www/WEB_WORKSPACE_22_10_2013/www/GIT/Symfony2.4/web
    <Directory /var/www/WEB_WORKSPACE_22_10_2013/www/GIT/Symfony2.4/web>
        # enable the .htaccess rewrites
        AllowOverride All
        Order allow,deny
        Allow from All
    </Directory>

    ErrorLog /var/log/apache2/project_error.log
    CustomLog /var/log/apache2/project_access.log combined
</VirtualHost>

