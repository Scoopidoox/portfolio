# Utilise l'image officielle MySQL
FROM mysql:8.0

# Définit les variables d'environnement (à personnaliser)
ENV MYSQL_ROOT_PASSWORD=P@ssW0rd
ENV MYSQL_DATABASE=portfolio
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=

# Expose le port MySQL
EXPOSE 3306