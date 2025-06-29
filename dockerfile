# Utilise l'image officielle MySQL
FROM mysql:8.0

# Définit les variables d'environnement (à personnaliser)
ENV MYSQL_ROOT_PASSWORD=hwztiwMYuYYzxNgChLabQrFoDunjzotm
ENV MYSQL_DATABASE=railway
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=hwztiwMYuYYzxNgChLabQrFoDunjzotm

# Expose le port MySQL
EXPOSE 3306