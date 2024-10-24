# Use the official PHP image from Docker Hub
FROM php:7.4-cli

# Set the working directory inside the container
WORKDIR /app

# Copy your application files to the container
COPY . /app

# Install any additional packages you may need (optional)
# RUN apt-get update && apt-get install -y <any-additional-packages>

# Expose port 80 or 8000 depending on your setup
EXPOSE 8000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000"]
