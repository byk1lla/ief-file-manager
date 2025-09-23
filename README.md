# 🗂️ IEF File Manager


<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge" alt="License">
  <img src="https://img.shields.io/badge/Version-0.1.0--alpha-orange.svg?style=for-the-badge" alt="Version">
</div>

<div align="center">
  <h3>🚀 Advanced Web-Based File Management System</h3>
  <p>Professional solution for modern, secure and user-friendly file management</p>
  
  <p><em>Gelişmiş Web Tabanlı Dosya Yönetim Sistemi - Modern, güvenli ve kullanıcı dostu dosya yönetimi için profesyonel çözüm</em></p>
</div>

---

## 📋 Table of Contents

- [🌟 Features](#-features)
- [🖼️ Screenshots](#️-screenshots)
- [⚡ Quick Start](#-quick-start)
- [🔧 Installation](#-installation)
- [⚙️ Configuration](#️-configuration)
- [🎯 Usage](#-usage)
- [🔒 Security](#-security)
- [🌐 Internationalization](#-internationalization)
- [🎨 Theme Features](#-theme-features)
- [📱 Responsive Design](#-responsive-design)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)
- [🙋‍♂️ Support](#️-support)

---

## 🌟 Features

### 📁 **File Management**
- ✅ **Create/Delete Folders** - Fast and secure folder operations
- ✅ **Multiple File Upload** - With drag & drop support
- ✅ **File Download** - One-click file downloads
- ✅ **ZIP Archive Extraction** - Direct ZIP extraction on server
- ✅ **File Search** - Real-time search functionality
- ✅ **File Filtering** - Filter by type (images, code, documents, etc.)
- 🔧 **File Creation** - *Currently being developed*

### 💻 **Code Editor**
- ✅ **Syntax Highlighting** - Support for popular file formats
- ✅ **Real-time Saving** - Fast saving with AJAX
- ✅ **Keyboard Shortcuts** - Professional editor experience
- ✅ **Unsaved Changes Warning** - Prevent data loss

### 🖼️ **Media Preview**
- ✅ **Image Preview** - JPG, PNG, GIF, SVG support
- ✅ **Video Player** - MP4, AVI, MOV support
- ✅ **Audio Player** - MP3, WAV, FLAC support
- ✅ **Modal Preview** - Full-screen media viewing

### 🔐 **Security**
- ✅ **CSRF Protection** - Token-based security
- ✅ **Path Validation** - Directory traversal protection
- ✅ **File Size Limits** - Configurable size restrictions
- ✅ **Session Management** - Secure login/logout system

### 🌍 **Internationalization**
- ✅ **Multi-language Support** - English and Turkish
- ✅ **Dynamic Language Switching** - Change language on the fly
- ✅ **Localized Interface** - All UI elements translated

### 🎨 **Modern UI/UX**
- ✅ **Dark/Light Theme** - Toggle between themes
- ✅ **Glassmorphism Design** - Modern visual effects
- ✅ **Smooth Animations** - Enhanced user experience
- ✅ **Context Menu** - Right-click file operations

---

## ⚠️ Known Issues (v0.1.0-alpha)

- 🔧 **File Creation**: File creation functionality is currently not working - actively being developed
- 🔧 **File Adding**: File adding feature is under development
- 📝 **Note**: This is an early alpha version. Many features are still being improved and stabilized.

---

## 🖼️ Screenshots

### Login Interface
<div align="center">
<img width="1679" height="874" alt="image" src="https://github.com/user-attachments/assets/9112e284-7d93-4dfd-8268-1f43656b366d" />
  <p><em>Secure glassmorphism login with animated background</em></p>
</div>

### Main Dashboard
<div align="center">
<img width="1675" height="867" alt="image" src="https://github.com/user-attachments/assets/ae1e0cba-4b0f-4798-8ca0-2a55eab4bb65" />
  <p><em>Clean, modern file management interface with card-based layout</em></p>
</div>

### Code Editor
<div align="center">
    <img width="1678" height="863" alt="image" src="https://github.com/user-attachments/assets/a9b0e2a6-8528-4fc1-baba-be24e108b2ea" />
    <p><em>Professional code editor with syntax highlighting</em></p>
</div>

---

## ⚡ Quick Start

```bash
# Clone the repository
git clone https://github.com/byk1lla/ief-file-manager.git

# Navigate to project directory
cd ief-file-manager

# Set up on your web server (Apache/Nginx)
# Make sure PHP 7.4+ is installed
```

**⚠️ Important:** Configure your credentials in `index.php` before use!

---

## 🔧 Installation

### Prerequisites
- **PHP 7.4+** with required extensions
- **Web Server** (Apache/Nginx)
- **ZIP Extension** (for archive operations)

### Step-by-Step Installation

1. **Download the project**
   ```bash
   git clone https://github.com/byk1lla/ief-file-manager.git
   cd ief-file-manager
   ```

2. **Set up web server**
   ```bash
   # For Apache
   sudo cp -r ief-file-manager /var/www/html/
   
   # For Nginx
   sudo cp -r ief-file-manager /usr/share/nginx/html/
   ```

3. **Set permissions**
   ```bash
   sudo chown -R www-data:www-data /var/www/html/ief-file-manager
   sudo chmod -R 755 /var/www/html/ief-file-manager
   ```

4. **Configure the application** (see Configuration section)

---

## ⚙️ Configuration

### Basic Configuration

Edit the following constants in `index.php`:

```php
// Security credentials
define('USERNAME', 'your_username');    // Change this!
define('PASSWORD', 'your_password');    // Change this!
define('ROOT_DIR', '/path/to/files');   // Your file directory
define('MAX_FILE_SIZE', 50 * 1024 * 1024); // 50MB default
```

### Advanced Configuration

```php
// Language settings
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'en'; // Default language

// File type restrictions
$allowed_extensions = ['jpg', 'png', 'txt', 'php', 'js']; // Add your allowed types

// Upload restrictions
ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');
```

### Web Server Configuration

#### Apache (.htaccess)
```apache
RewriteEngine On
RewriteRule ^admin$ index.php [L]

# Security headers
Header always set X-Frame-Options DENY
Header always set X-Content-Type-Options nosniff
```

#### Nginx
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}

# Security headers
add_header X-Frame-Options DENY;
add_header X-Content-Type-Options nosniff;
```

---

## 🎯 Usage

### Basic Operations

#### 🔐 **Login**
1. Navigate to your installation URL
2. Enter your configured username and password
3. Select your preferred language (EN/TR)

#### 📁 **File Management**
- **Create Folder**: Use the "Create Folder" card on the main interface
- **Upload Files**: Drag & drop files or use the upload form
- **Download Files**: Click the blue download button on any file
- **Delete Items**: Click the red delete button (confirmation required)

#### ✏️ **Edit Files**
1. Click the eye icon on any text file
2. Use the built-in code editor
3. Save with `Ctrl+S` or the save button
4. Close with `Esc` or the close button

#### 🔍 **Search & Filter**
- Use the search box to find files by name
- Filter by file type using the filter buttons
- Results update in real-time

### Keyboard Shortcuts

| Shortcut | Action |
|----------|--------|
| `Ctrl + S` | Save file (in editor) |
| `Ctrl + N` | Create new file |
| `Ctrl + F` | Focus search box |
| `Esc` | Close modals |
| `F1` | Show help |

---

## 🔒 Security

### Security Features

- **CSRF Protection**: All forms protected with tokens
- **Path Validation**: Prevents directory traversal attacks
- **File Size Limits**: Configurable upload restrictions
- **Session Security**: Secure session management
- **Input Sanitization**: All user inputs are sanitized

### Security Best Practices

1. **Change Default Credentials**
   ```php
   define('USERNAME', 'your_secure_username');
   define('PASSWORD', 'your_strong_password');
   ```

2. **Restrict File Access**
   ```php
   $restricted_dirs = ['/etc', '/var', '/usr'];
   ```

3. **Enable HTTPS**
   - Use SSL certificates
   - Force HTTPS redirects

4. **Regular Updates**
   - Keep PHP updated
   - Monitor security advisories

---

## 🌐 Internationalization

### Supported Languages

- 🇺🇸 **English** (en) - Primary
- 🇹🇷 **Turkish** (tr) - Secondary

### Adding New Languages

1. **Add translation array**:
   ```php
   $translations['es'] = [
       'title' => 'FileManager Pro',
       'login' => 'Iniciar Sesión',
       // ... add all translations
   ];
   ```

2. **Update language switcher**:
   ```php
   <a href="?lang=es" class="...">ES</a>
   ```

### Translation Structure

```php
'key' => [
    'en' => 'English Text',
    'tr' => 'Türkçe Metin',
    'es' => 'Texto en Español'
]
```

---

## 🎨 Theme Features

### Available Themes

- 🌞 **Light Theme** - Clean, professional look
- 🌙 **Dark Theme** - Easy on the eyes

### Theme Customization

```css
/* Custom theme variables */
:root {
    --primary-color: #8b5cf6;
    --secondary-color: #3b82f6;
    --background-color: #f9fafb;
    --text-color: #1f2937;
}

[data-theme="dark"] {
    --background-color: #1f2937;
    --text-color: #f9fafb;
}
```

### Glassmorphism Effects

The interface uses modern glassmorphism effects:
- Translucent backgrounds
- Backdrop filters
- Subtle shadows
- Smooth transitions

---

## 📱 Responsive Design

### Breakpoints

| Device | Breakpoint | Columns |
|--------|------------|---------|
| Mobile | < 640px | 1 |
| Tablet | 640px - 1024px | 2-3 |
| Desktop | > 1024px | 4-5 |

### Mobile Features

- Touch-friendly interface
- Swipe gestures
- Optimized file cards
- Responsive modals

---

## 🤝 Contributing

We welcome contributions! Here's how you can help:

### Development Setup

```bash
# Fork the repository
git clone https://github.com/your-username/ief-file-manager.git
cd ief-file-manager

# Create a new branch
git checkout -b feature/your-feature-name

# Make your changes and commit
git commit -m "Add your feature"

# Push to your fork
git push origin feature/your-feature-name

# Create a pull request
```

### Contribution Guidelines

- **Code Style**: Follow PSR-12 standards
- **Documentation**: Update README for new features
- **Testing**: Test your changes thoroughly
- **Security**: Consider security implications

### Areas for Contribution

- 🌍 **Translations**: Add new language support
- 🎨 **Themes**: Create new theme variations
- 🔌 **Plugins**: Develop extension system
- 🐛 **Bug Fixes**: Report and fix issues
- 📚 **Documentation**: Improve docs

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

```
MIT License

Copyright (c) 2024 IEFSoftware

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
```

---

## 🙋‍♂️ Support

### Getting Help

- 📖 **Documentation**: Check this README first
- 🐛 **Issues**: [Report bugs here](https://github.com/byk1lla/ief-file-manager/issues)
- 💬 **Discussions**: [Community discussions](https://github.com/byk1lla/ief-file-manager/discussions)
- 📧 **Email**: Contact [byk1lla](https://github.com/byk1lla)

### FAQ

**Q: How do I change the default language?**
A: Modify the `$lang` variable in `index.php` or use the language switcher.

**Q: Can I increase the file upload limit?**
A: Yes, modify `MAX_FILE_SIZE` and your PHP settings (`upload_max_filesize`, `post_max_size`).

**Q: Is this secure for production use?**
A: Yes, but ensure you change default credentials and follow security best practices.

**Q: How do I add custom file types?**
A: Modify the `$types` array in the `getFileType()` function.

**Q: Why is file creation not working?**
A: File creation feature is currently under development in this alpha version. It will be available in the next release.

---

## 🌟 Star History

[![Star History Chart](https://api.star-history.com/svg?repos=byk1lla/ief-file-manager&type=Date)](https://star-history.com/#byk1lla/ief-file-manager&Date)

---

<div align="center">
  <h3>🚀 Ready to manage your files like a pro?</h3>
  <p>
    <a href="https://github.com/byk1lla/ief-file-manager">⭐ Star this repository</a> |
    <a href="https://github.com/byk1lla/ief-file-manager/fork">🍴 Fork it</a> |
    <a href="https://github.com/byk1lla/ief-file-manager/issues">🐛 Report issues</a>
  </p>
  
  <p><strong>Made with ❤️ by <a href="https://github.com/byk1lla">byk1lla</a> | IEFSoftware</strong></p>
</div>

---

## 🇹🇷 Türkçe

### Hızlı Başlangıç
Bu proje, modern web tabanlı dosya yönetimi için geliştirilmiş profesyonel bir çözümdür. Güvenli, hızlı ve kullanıcı dostu arayüzü ile dosyalarınızı kolayca yönetebilirsiniz.

### Temel Özellikler
- 📁 Gelişmiş dosya yönetimi
- 💻 Entegre kod editörü  
- 🔒 Güvenli giriş sistemi
- 🌍 Çoklu dil desteği
- 🎨 Modern arayüz tasarımı

### Bilinen Sorunlar (v0.1.0-alpha)
- 🔧 **Dosya Oluşturma**: Dosya oluşturma özelliği şu anda çalışmıyor - aktif olarak geliştiriliyor
- 🔧 **Dosya Ekleme**: Dosya ekleme özelliği geliştirilme aşamasında

### Kurulum
1. Projeyi indirin: `git clone https://github.com/byk1lla/ief-file-manager.git`
2. Web sunucunuza yükleyin
3. `index.php` dosyasında kullanıcı bilgilerinizi güncelleyin
4. Tarayıcınızdan erişin ve kullanmaya başlayın!

Detaylı bilgi için yukarıdaki İngilizce dokümantasyonu inceleyebilirsiniz.
