# HomeDimensions
A docker container to maintain dimenstions for common stuff around the home


=========Run via===========

docker rm -f home-dimensions
docker volume rm home_dimensions_data
docker build -t home-dimensions .
docker run -d \
  --name home-dimensions \
  -p 5050:80 \
  -v home_dimensions_data:/var/www/html \
  home-dimensions



==============================
View http://localhost:5050  
