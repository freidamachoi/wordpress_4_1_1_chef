cookbook_file "/srv/www/wp_knight/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'deploy'
  group 'www-data'
end
