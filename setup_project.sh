#!/bin/bash

# Define the submodule repository URL
SUBMODULE_REPO="https://github.com/Webovy-partner/W-Admin"

# Add the W-Admin submodule
echo "Adding the W-Admin as Adminsubmodule..."

git submodule add --force https://github.com/Webovy-partner/W-Admin admin
git submodule update --init --recursive --force

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
  
  # Check if the source path is a directory
  if [ ! -d "$SOURCE_PATH" ]; then
    echo "Source path is not a directory: $SOURCE_PATH"
    continue
  fi

  # Create the target directory if it doesn't exist
  TARGET_DIR_NAME=$(dirname "$TARGET_PATH")
  if [ ! -d "$TARGET_DIR_NAME" ]; then
    echo "Creating target directory: $TARGET_DIR_NAME"
    mkdir -p "$TARGET_DIR_NAME"
  fi

  # Remove the existing symlink or file if it exists
  if [ -e "$TARGET_PATH" ]; then
    echo "Removing existing $TARGET_PATH"
    rm -rf "$TARGET_PATH"
  fi

  # Create the symbolic link (force creation and treat as directory)
  echo "Creating symlink from $SOURCE_PATH to $TARGET_PATH"
  ln -snf "$SOURCE_PATH" "$TARGET_PATH"
done

# Special case for /routes/frontend
SOURCE_PATH="$SOURCE_DIR/routes/Frontend"
TARGET_PATH="$TARGET_DIR/routes/Frontend"

# Check if the source path is a directory
if [ ! -d "$SOURCE_PATH" ]; then
  echo "Source path is not a directory: $SOURCE_PATH"
else
  # Create the target directory if it doesn't exist
  mkdir -p "$(dirname "$TARGET_PATH")"

  # Remove the existing symlink or directory if it exists
  if [ -e "$TARGET_PATH" ]; then
    echo "Removing existing $TARGET_PATH"
    rm -rf "$TARGET_PATH"
  fi

  # Create the symbolic link
  echo "Creating symlink from $SOURCE_PATH to $TARGET_PATH"
  ln -snf "$SOURCE_PATH" "$TARGET_PATH"
fi

# Verification
echo "Verification of symbolic links..."
for DIR in "${DIRECTORIES[@]}"; do
  SOURCE_PATH="$SOURCE_DIR/$DIR"
  TARGET_PATH="$TARGET_DIR/$DIR"
  echo "Source: $SOURCE_PATH"
  ls -ld "$SOURCE_PATH"
  echo "Target: $TARGET_PATH"
  ls -ld "$TARGET_PATH"
  echo ""
done

echo "Setup completed successfully."