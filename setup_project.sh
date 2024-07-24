#!/bin/bash

# Define the submodule repository URL
SUBMODULE_REPO="https://github.com/Webovy-partner/W-Admin"

# Add the W-Admin submodule
echo "Adding the W-Admin as Adminsubmodule..."
git submodule add "$SUBMODULE_REPO" admin
git submodule update --init --recursive

# Get the current working directory
SOURCE_DIR=$(pwd)  # Absolute path of the current directory
TARGET_DIR="$SOURCE_DIR/admin"  # Absolute path of the target directory (submodule directory)

# List of directories to link (relative to SOURCE_DIR)
DIRECTORIES=(
  "app/Livewire/Frontend"
  "app/Mail/Frontend"
  "app/Models/Frontend"
  "app/Http/Controllers/Frontend"
  "public/frontend"
  "resources/views/frontend"
  "resources/views/layouts/frontend"
  "resources/views/livewire/frontend"
)

# Create symbolic links
echo "Creating symbolic links in $TARGET_DIR..."

for DIR in "${DIRECTORIES[@]}"; do
  SOURCE_PATH="$SOURCE_DIR/$DIR"
  TARGET_PATH="$TARGET_DIR/$DIR"
  
  # Create the target directory if it doesn't exist
  mkdir -p "$(dirname "$TARGET_PATH")"

  # Remove the existing symlink or directory if it exists
  if [ -e "$TARGET_PATH" ]; then
    echo "Removing existing $TARGET_PATH"
    rm -rf "$TARGET_PATH"
  fi

  # Create the symbolic link
  echo "Creating symlink from $SOURCE_PATH to $TARGET_PATH"
  ln -s "$SOURCE_PATH" "$TARGET_PATH"
done

# Special case for /routes/frontend
SOURCE_PATH="$SOURCE_DIR/routes/Frontend"
TARGET_PATH="$TARGET_DIR/routes/Frontend"

# Create the target directory if it doesn't exist
mkdir -p "$(dirname "$TARGET_PATH")"

# Remove the existing symlink or directory if it exists
if [ -e "$TARGET_PATH" ]; then
  echo "Removing existing $TARGET_PATH"
  rm -rf "$TARGET_PATH"
fi

# Create the symbolic link
echo "Creating symlink from $SOURCE_PATH to $TARGET_PATH"
ln -s "$SOURCE_PATH" "$TARGET_PATH"

# Verification
echo "Verification of symbolic links..."
ls -ld "$SOURCE_DIR/app/Livewire/Frontend" "$TARGET_DIR/app/Livewire/Frontend"
ls -ld "$SOURCE_DIR/app/Http/Controllers/Frontend" "$TARGET_DIR/app/Http/Controllers/Frontend"
ls -ld "$SOURCE_DIR/app/Mail/Frontend" "$TARGET_DIR/app/Mail/Frontend"
ls -ld "$SOURCE_DIR/app/Models/Frontend" "$TARGET_DIR/app/Models/Frontend"
ls -ld "$SOURCE_DIR/public/frontend" "$TARGET_DIR/public/frontend"
ls -ld "$SOURCE_DIR/resources/views/frontend" "$TARGET_DIR/resources/views/frontend"
ls -ld "$SOURCE_DIR/resources/views/layouts/frontend" "$TARGET_DIR/resources/views/layouts/frontend"
ls -ld "$SOURCE_DIR/resources/views/livewire/frontend" "$TARGET_DIR/resources/views/livewire/frontend"
ls -ld "$SOURCE_DIR/routes/Frontend" "$TARGET_DIR/routes/Frontend"

echo "Setup completed successfully."
