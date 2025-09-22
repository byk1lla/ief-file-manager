    <?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Language support
    $lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'tr';
    $_SESSION['lang'] = $lang;

    $translations = [
        'tr' => [
            'title' => 'FileManager Pro',
            'subtitle' => 'Gelişmiş Dosya Yönetimi',
            'company' => 'IEFSoftware',
            'login_title' => 'FileManager Pro - Giriş',
            'login_subtitle' => 'Güvenli dosya yönetim sistemi',
            'username' => 'Kullanıcı Adı',
            'password' => 'Şifre',
            'login' => 'Giriş Yap',
            'logout' => 'Çıkış Yap',
            'current_location' => 'Mevcut Konum',
            'main_folder' => 'ana-klasor',
            'create_folder' => 'Klasör Oluştur',
            'folder_name' => 'Klasör adı',
            'create' => 'Oluştur',
            'upload_file' => 'Dosya Yükle',
            'upload' => 'Yükle',
            'zip_operations' => 'ZIP İşlemleri',
            'extract_zip' => 'ZIP Aç',
            'parent_folder' => 'Üst Klasör',
            'go_up' => 'Bir üst dizine git',
            'go' => 'Git',
            'folder' => 'Klasör',
            'file_editor' => 'Dosya Düzenleyici',
            'professional_editor' => 'Profesyonel kod editörü',
            'save' => 'Kaydet',
            'close' => 'Kapat',
            'media_preview' => 'Medya Önizleme',
            'loading' => 'Yükleniyor...',
            'saving' => 'Kaydediliyor...',
            'success' => 'Başarılı!',
            'error' => 'Hata!',
            'confirm_delete_folder' => 'klasörünü silmek istediğinize emin misiniz?',
            'confirm_delete_file' => 'dosyasını silmek istediğinize emin misiniz?',
            'confirm_logout' => 'Çıkış yapmak istediğinize emin misiniz?',
            'invalid_credentials' => 'Kullanıcı adı veya şifre hatalı!',
            'security_error' => 'Güvenlik hatası! Lütfen tekrar deneyin.',
            'login_error' => 'Giriş Hatası',
            'folder_created' => 'Klasör başarıyla oluşturuldu!',
            'folder_exists' => 'Klasör zaten mevcut!',
            'folder_create_error' => 'Klasör oluşturulamadı!',
            'files_uploaded' => 'dosya başarıyla yüklendi!',
            'upload_error' => 'Dosya yüklenemedi!',
            'zip_extracted' => 'ZIP dosyası başarıyla açıldı!',
            'zip_error' => 'ZIP dosyası açılamadı!',
            'zip_not_supported' => 'ZIP desteği mevcut değil!',
            'folder_deleted' => 'Klasör başarıyla silindi!',
            'file_deleted' => 'Dosya başarıyla silindi!',
            'delete_error' => 'Silme işlemi başarısız!',
            'file_saved' => 'Dosya başarıyla kaydedildi',
            'file_not_found' => 'Dosya bulunamadı',
            'no_write_permission' => 'Dosya yazma izni yok',
            'save_error' => 'Dosya kaydedilemedi',
            'preview_not_available' => 'Önizleme Mevcut Değil',
            'preview_not_supported' => 'Bu dosya türü şu an için önizlenemiyor. İndirmek için mavi butona tıklayın.',
            'file_too_large' => 'Dosya Çok Büyük',
            'max_file_size' => 'dosyası çok büyük. Maksimum dosya boyutu',
            'unsaved_changes' => 'Kaydedilmemiş Değişiklikler',
            'unsaved_warning' => 'Değişiklikleriniz kaydedilmedi. Yine de çıkmak istediğinize emin misiniz?',
            'yes_exit' => 'Evet, Çık',
            'cancel' => 'İptal',
            'drop_files_here' => 'Dosyaları Buraya Bırakın',
            'files_auto_upload' => 'Dosyalar otomatik olarak yüklenecek',
            'uploading_files' => 'Dosyalar Yükleniyor...',
            'files_uploading' => 'dosya yükleniyor, lütfen bekleyin.',
            'upload_successful' => 'Dosyalar başarıyla yüklendi.',
            'upload_failed' => 'Dosyalar yüklenirken bir hata oluştu.',
            'editing' => 'Düzenleniyor:',
            'search_files' => 'Dosya ara...',
            'all' => 'Tümü',
            'folders' => 'Klasörler',
            'images' => 'Resimler',
            'code' => 'Kod',
            'documents' => 'Belgeler',
            'videos' => 'Videolar',
            'audio' => 'Ses',
            'archives' => 'Arşivler',
            'new_file' => 'Yeni Dosya',
            'shortcuts' => 'Kısayollar',
            'developed_by' => 'Geliştiren',
            'all_rights_reserved' => 'Tüm hakları saklıdır.'
        ],
        'en' => [
            'title' => 'FileManager Pro',
            'subtitle' => 'Advanced File Management',
            'company' => 'IEFSoftware',
            'login_title' => 'FileManager Pro - Login',
            'login_subtitle' => 'Secure file management system',
            'username' => 'Username',
            'password' => 'Password',
            'login' => 'Sign In',
            'logout' => 'Sign Out',
            'current_location' => 'Current Location',
            'main_folder' => 'root-folder',
            'create_folder' => 'Create Folder',
            'folder_name' => 'Folder name',
            'create' => 'Create',
            'upload_file' => 'Upload File',
            'upload' => 'Upload',
            'zip_operations' => 'ZIP Operations',
            'extract_zip' => 'Extract ZIP',
            'parent_folder' => 'Parent Folder',
            'go_up' => 'Go to parent directory',
            'go' => 'Go',
            'folder' => 'Folder',
            'file_editor' => 'File Editor',
            'professional_editor' => 'Professional code editor',
            'save' => 'Save',
            'close' => 'Close',
            'media_preview' => 'Media Preview',
            'loading' => 'Loading...',
            'saving' => 'Saving...',
            'success' => 'Success!',
            'error' => 'Error!',
            'confirm_delete_folder' => 'Are you sure you want to delete this folder?',
            'confirm_delete_file' => 'Are you sure you want to delete this file?',
            'confirm_logout' => 'Are you sure you want to sign out?',
            'invalid_credentials' => 'Invalid username or password!',
            'security_error' => 'Security error! Please try again.',
            'login_error' => 'Login Error',
            'folder_created' => 'Folder created successfully!',
            'folder_exists' => 'Folder already exists!',
            'folder_create_error' => 'Could not create folder!',
            'files_uploaded' => 'files uploaded successfully!',
            'upload_error' => 'Could not upload file!',
            'zip_extracted' => 'ZIP file extracted successfully!',
            'zip_error' => 'Could not extract ZIP file!',
            'zip_not_supported' => 'ZIP support not available!',
            'folder_deleted' => 'Folder deleted successfully!',
            'file_deleted' => 'File deleted successfully!',
            'delete_error' => 'Delete operation failed!',
            'file_saved' => 'File saved successfully',
            'file_not_found' => 'File not found',
            'no_write_permission' => 'No write permission for file',
            'save_error' => 'Could not save file',
            'preview_not_available' => 'Preview Not Available',
            'preview_not_supported' => 'This file type cannot be previewed. Click the blue button to download.',
            'file_too_large' => 'File Too Large',
            'max_file_size' => 'file is too large. Maximum file size is',
            'unsaved_changes' => 'Unsaved Changes',
            'unsaved_warning' => 'Your changes have not been saved. Are you sure you want to exit?',
            'yes_exit' => 'Yes, Exit',
            'cancel' => 'Cancel',
            'drop_files_here' => 'Drop Files Here',
            'files_auto_upload' => 'Files will be uploaded automatically',
            'uploading_files' => 'Uploading Files...',
            'files_uploading' => 'files uploading, please wait.',
            'upload_successful' => 'Files uploaded successfully.',
            'upload_failed' => 'An error occurred while uploading files.',
            'editing' => 'Editing:',
            'search_files' => 'Search files...',
            'all' => 'All',
            'folders' => 'Folders',
            'images' => 'Images',
            'code' => 'Code',
            'documents' => 'Documents',
            'videos' => 'Videos',
            'audio' => 'Audio',
            'archives' => 'Archives',
            'new_file' => 'New File',
            'shortcuts' => 'Shortcuts',
            'developed_by' => 'Developed by',
            'all_rights_reserved' => 'All rights reserved.'
        ]
    ];

    function t($key) {
        global $translations, $lang;
        return $translations[$lang][$key] ?? $translations['en'][$key] ?? $key;
    }

    // Security constants
    define('USERNAME', 'YOUR_USERNAME');
    define('PASSWORD', 'YOUR_PASSWORD');
    define('ROOT_DIR', 'YOUR_ROOT_DIRECTORY');
    define('MAX_FILE_SIZE', 50 * 1024 * 1024); // 50MB

    // CSRF token functions
    function generateCSRFToken() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    function verifyCSRFToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }

    // Secure file path validation
    function isValidPath($path, $basePath) {
        $realPath = realpath($path);
        $realBasePath = realpath($basePath);
        return $realPath && $realBasePath && strpos($realPath, $realBasePath) === 0;
    }

    // File type detection
    function getFileType($filename) {
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        $types = [
            'image' => ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp'],
            'video' => ['mp4', 'avi', 'mov', 'wmv', 'flv', 'mkv', 'webm'],
            'audio' => ['mp3', 'wav', 'flac', 'aac', 'ogg', 'wma'],
            'code' => ['php', 'js', 'css', 'html', 'json', 'xml', 'py', 'java', 'cpp', 'c', 'h', 'md'],
            'document' => ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'],
            'archive' => ['zip', 'rar', '7z', 'tar', 'gz']
        ];
        
        foreach ($types as $type => $extensions) {
            if (in_array($ext, $extensions)) {
                return $type;
            }
        }
        
        return 'other';
    }

    // Login processing
    if (isset($_POST['login'])) {
        if (isset($_POST['csrf_token']) && verifyCSRFToken($_POST['csrf_token'])) {
            if ($_POST['username'] === USERNAME && $_POST['password'] === PASSWORD) {
                $_SESSION['logged_in'] = true;
                header('Location: ' . $_SERVER['PHP_SELF'] . '?lang=' . $lang);
                exit;
            } else {
                $error = t('invalid_credentials');
            }
        } else {
            $error = t('security_error');
        }
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: ' . $_SERVER['PHP_SELF'] . '?lang=' . $lang);
        exit;
    }

    // Login page
    if (!isset($_SESSION['logged_in'])): ?>
    <!DOCTYPE html>
    <html lang="<?= $lang ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= t('login_title') ?></title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: { 'poppins': ['Poppins', 'sans-serif'] }
                    }
                }
            }
        </script>
    </head>
    <body class="font-poppins bg-gradient-to-br from-purple-900 via-blue-900 to-indigo-900 min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                <div class="absolute top-40 left-40 w-80 h-80 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
            </div>
            
            <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 shadow-2xl">
                <!-- Language Switcher -->
                <div class="absolute top-4 right-4 flex space-x-2">
                    <a href="?lang=tr" class="<?= $lang === 'tr' ? 'bg-white/30' : 'bg-white/10' ?> text-white px-3 py-1 rounded-lg text-sm font-medium hover:bg-white/20 transition-all">TR</a>
                    <a href="?lang=en" class="<?= $lang === 'en' ? 'bg-white/30' : 'bg-white/10' ?> text-white px-3 py-1 rounded-lg text-sm font-medium hover:bg-white/20 transition-all">EN</a>
                </div>
                
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-blue-500 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-folder-open text-white text-3xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-white mb-2"><?= t('title') ?></h1>
                    <p class="text-white/70"><?= t('login_subtitle') ?></p>
                    <p class="text-white/50 text-sm mt-2"><?= t('developed_by') ?> <?= t('company') ?></p>
                </div>
                
                <?php if (isset($error)): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: '<?= t('login_error') ?>',
                                text: '<?= htmlspecialchars($error) ?>',
                                background: 'rgba(255, 255, 255, 0.95)',
                                color: '#1f2937',
                                confirmButtonColor: '#dc2626'
                            });
                        });
                    </script>
                <?php endif; ?>
                
                <form method="POST" class="space-y-6">
                    <input type="hidden" name="csrf_token" value="<?= generateCSRFToken() ?>">
                    <div class="space-y-4">
                        <div class="relative">
                            <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                            <input type="text" name="username" class="w-full bg-white/10 border border-white/20 rounded-xl pl-12 pr-4 py-4 text-white placeholder-white/60 focus:outline-none focus:border-purple-400 focus:bg-white/20 transition-all duration-300" placeholder="<?= t('username') ?>" required>
                        </div>
                        <div class="relative">
                            <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-white/60"></i>
                            <input type="password" name="password" class="w-full bg-white/10 border border-white/20 rounded-xl pl-12 pr-4 py-4 text-white placeholder-white/60 focus:outline-none focus:border-purple-400 focus:bg-white/20 transition-all duration-300" placeholder="<?= t('password') ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" name="login" class="w-full bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white font-semibold py-4 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <i class="fas fa-sign-in-alt mr-2"></i><?= t('login') ?>
                    </button>
                </form>
            </div>
        </div>
        
        <style>
            @keyframes blob {
                0% { transform: translate(0px, 0px) scale(1); }
                33% { transform: translate(30px, -50px) scale(1.1); }
                66% { transform: translate(-20px, 20px) scale(0.9); }
                100% { transform: translate(0px, 0px) scale(1); }
            }
            .animate-blob { animation: blob 7s infinite; }
            .animation-delay-2000 { animation-delay: 2s; }
            .animation-delay-4000 { animation-delay: 4s; }
        </style>
    </body>
    </html>
    <?php exit; endif;

    // Main system start
    $currentDir = $_GET['dir'] ?? '';
    $currentDir = ltrim($currentDir, '/');
    $path = realpath(ROOT_DIR . '/' . $currentDir);

    if (!$path || !isValidPath($path, ROOT_DIR)) {
        $path = realpath(ROOT_DIR);
        $currentDir = '';
    }

    // Helper functions
    function rrmdir($dir) {
        if (!is_dir($dir)) return false;
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? rrmdir("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

    function fileIcon($file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $icons = [
            'png' => 'fa-file-image', 'jpg' => 'fa-file-image', 'jpeg' => 'fa-file-image', 'gif' => 'fa-file-image',
            'zip' => 'fa-file-zipper', 'rar' => 'fa-file-zipper', 'txt' => 'fa-file-lines', 'pdf' => 'fa-file-pdf',
            'doc' => 'fa-file-word', 'docx' => 'fa-file-word', 'mp3' => 'fa-file-audio', 'wav' => 'fa-file-audio',
            'mp4' => 'fa-file-video', 'avi' => 'fa-file-video', 'php' => 'fa-file-code', 'js' => 'fa-file-code',
            'css' => 'fa-file-code', 'json' => 'fa-file-code', 'html' => 'fa-file-code', 'md' => 'fa-file-code'
        ];
        return $icons[$ext] ?? 'fa-file';
    }

    function formatFileSize($bytes) {
        if ($bytes == 0) return '0 B';
        $k = 1024;
        $sizes = ['B', 'KB', 'MB', 'GB'];
        $i = floor(log($bytes) / log($k));
        return round($bytes / pow($k, $i), 2) . ' ' . $sizes[$i];
    }

    // AJAX operations
    if (isset($_GET['action'])) {
        header('Content-Type: application/json; charset=utf-8');
        
        if ($_GET['action'] === 'view_file' && isset($_GET['file'])) {
            $fileName = basename($_GET['file']);
            $filePath = $path . '/' . $fileName;
            
            if (is_file($filePath) && isValidPath($filePath, ROOT_DIR)) {
                $content = file_get_contents($filePath);
                echo json_encode([
                    'status' => 'success',
                    'content' => $content,
                    'size' => filesize($filePath),
                    'modified' => date('Y-m-d H:i:s', filemtime($filePath))
                ]);
            } else {
                http_response_code(404);
                echo json_encode(['status' => 'error', 'message' => t('file_not_found')]);
            }
            exit;
        }
        
        if ($_GET['action'] === 'save_file' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        
            
            $fileName = basename($_POST['file_name'] ?? '');
            $content = $_POST['content'] ?? '';
            $filePath = $path . '/' . $fileName;
            
            if (!isValidPath($filePath, ROOT_DIR)) {
                http_response_code(403);
                echo json_encode(['status' => 'error', 'message' => 'Invalid file path']);
                exit;
            }
            
            if (file_exists($filePath) && !is_writable($filePath)) {
                http_response_code(403);
                echo json_encode(['status' => 'error', 'message' => t('no_write_permission')]);
                exit;
            }
            
            $result = file_put_contents($filePath, $content, LOCK_EX);
            
            if ($result !== false) {
                echo json_encode([
                    'status' => 'success',
                    'message' => t('file_saved'),
                    'bytes' => $result,
                    'modified' => date('Y-m-d H:i:s')
                ]);
            } else {
                http_response_code(500);
                echo json_encode(['status' => 'error', 'message' => t('save_error')]);
            }
            exit;
        }
        
        if ($_GET['action'] === 'download_file' && isset($_GET['file'])) {
            $fileName = basename($_GET['file']);
            $filePath = $path . '/' . $fileName;
            
            if (is_file($filePath) && isValidPath($filePath, ROOT_DIR)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . $fileName . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filePath));
                readfile($filePath);
            } else {
                http_response_code(404);
                echo t('file_not_found');
            }
            exit;
        }
    }

    // POST operations
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!verifyCSRFToken($_POST['csrf_token'] ?? '')) {
            $message = t('security_error');
        } else {
            // Create folder
            if (isset($_POST['mkdir']) && !empty($_POST['dirname'])) {
                $dirName = basename($_POST['dirname']);
                $newDir = $path . '/' . $dirName;
                
                if (!file_exists($newDir)) {
                    if (mkdir($newDir, 0755)) {
                        $message = t('folder_created');
                    } else {
                        $message = t('folder_create_error');
                    }
                } else {
                    $message = t('folder_exists');
                }
            }
            
            // File upload
            if (isset($_FILES['upload']) && !empty($_FILES['upload']['name'][0])) {
                $uploadedFiles = 0;
                $totalFiles = count($_FILES['upload']['name']);
                
                for ($i = 0; $i < $totalFiles; $i++) {
                    if ($_FILES['upload']['error'][$i] === UPLOAD_ERR_OK) {
                        $fileName = basename($_FILES['upload']['name'][$i]);
                        $targetPath = $path . '/' . $fileName;
                        
                        if ($_FILES['upload']['size'][$i] <= MAX_FILE_SIZE) {
                            if (move_uploaded_file($_FILES['upload']['tmp_name'][$i], $targetPath)) {
                                $uploadedFiles++;
                            }
                        }
                    }
                }
                
                if ($uploadedFiles > 0) {
                    $message = "$uploadedFiles " . t('files_uploaded');
                } else {
                    $message = t('upload_error');
                }
            }
            
            // ZIP upload and extract
            if (isset($_FILES['zipupload']) && $_FILES['zipupload']['error'] === UPLOAD_ERR_OK) {
                if (class_exists('ZipArchive')) {
                    $zip = new ZipArchive;
                    if ($zip->open($_FILES['zipupload']['tmp_name']) === TRUE) {
                        $zip->extractTo($path);
                        $zip->close();
                        $message = t('zip_extracted');
                    } else {
                        $message = t('zip_error');
                    }
                } else {
                    $message = t('zip_not_supported');
                }
            }
            
            if ($message && $_SERVER['REQUEST_METHOD'] === 'POST') {
                header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($currentDir) . '&msg=' . urlencode($message) . '&lang=' . $lang);
                exit;
            }
        }
    }

    // Delete operation
    if (isset($_GET['delete'])) {
        $deleteItem = basename($_GET['delete']);
        $deletePath = $path . '/' . $deleteItem;
        
        if (isValidPath($deletePath, ROOT_DIR)) {
            if (is_dir($deletePath)) {
                if (rrmdir($deletePath)) {
                    $message = t('folder_deleted');
                } else {
                    $message = t('delete_error');
                }
            } else if (is_file($deletePath)) {
                if (unlink($deletePath)) {
                    $message = t('file_deleted');
                } else {
                    $message = t('delete_error');
                }
            }
        }
        
        if ($message) {
            header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($currentDir) . '&msg=' . urlencode($message) . '&lang=' . $lang);
            exit;
        }
    }

    // Message display
    if (isset($_GET['msg'])) {
        $message = $_GET['msg'];
    }

    // File list
    $files = array_diff(scandir($path), array('.', '..', basename(__FILE__)));
    ?>

    <!DOCTYPE html>
    <html lang="<?= $lang ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= t('title') ?> - <?= t('company') ?></title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: { 'poppins': ['Poppins', 'sans-serif'] }
                    }
                }
            }
            
            // Translation object for JavaScript
            const translations = <?= json_encode($translations[$lang]) ?>;
            function t(key) {
                return translations[key] || key;
            }
        </script>
    </head>
    <body class="font-poppins bg-gray-50 min-h-screen">
        <?php if ($message): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: '<?= strpos($message, t('success')) !== false || strpos($message, 'başarıyla') !== false || strpos($message, 'successfully') !== false ? 'success' : 'error' ?>',
                    title: '<?= strpos($message, t('success')) !== false || strpos($message, 'başarıyla') !== false || strpos($message, 'successfully') !== false ? t('success') : t('error') ?>',
                    text: '<?= htmlspecialchars($message) ?>',
                    confirmButtonColor: '<?= strpos($message, t('success')) !== false || strpos($message, 'başarıyla') !== false || strpos($message, 'successfully') !== false ? '#059669' : '#dc2626' ?>'
                });
            });
        </script>
        <?php endif; ?>

        <!-- Header -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-folder-open text-white text-lg"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-900"><?= t('title') ?></h1>
                            <p class="text-sm text-gray-500"><?= t('subtitle') ?> - <?= t('company') ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Language Switcher -->
                        <div class="flex space-x-2">
                            <a href="?<?= http_build_query(array_merge($_GET, ['lang' => 'tr'])) ?>" class="<?= $lang === 'tr' ? 'bg-purple-100 text-purple-700' : 'bg-gray-100 text-gray-600' ?> px-3 py-1 rounded-lg text-sm font-medium hover:bg-purple-100 hover:text-purple-700 transition-all">TR</a>
                            <a href="?<?= http_build_query(array_merge($_GET, ['lang' => 'en'])) ?>" class="<?= $lang === 'en' ? 'bg-purple-100 text-purple-700' : 'bg-gray-100 text-gray-600' ?> px-3 py-1 rounded-lg text-sm font-medium hover:bg-purple-100 hover:text-purple-700 transition-all">EN</a>
                        </div>
                        <a href="?logout=1&lang=<?= $lang ?>" onclick="return confirm('<?= t('confirm_logout') ?>')" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-sign-out-alt mr-2"></i><?= t('logout') ?>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Breadcrumb -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 mb-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2 text-sm">
                        <i class="fas fa-map-marker-alt text-purple-500"></i>
                        <span class="text-gray-600"><?= t('current_location') ?>:</span>
                        <span class="font-mono bg-gray-100 px-3 py-1 rounded-lg text-gray-800">
                            /<?= htmlspecialchars($currentDir ?: t('main_folder')) ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Search and Filter Bar -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 mb-8">
                <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                    <div class="flex-1 w-full sm:w-auto">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="text" id="searchInput" placeholder="<?= t('search_files') ?>" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                    </div>
                    <div class="flex gap-2 flex-wrap">
                        <button onclick="filterByType('all')" class="filter-btn px-3 py-1 rounded-lg text-sm font-medium bg-purple-500 text-white transition-all">
                            <?= t('all') ?>
                        </button>
                        <button onclick="filterByType('folder')" class="filter-btn px-3 py-1 rounded-lg text-sm font-medium bg-gray-200 text-gray-700 hover:bg-purple-100 transition-all">
                            <?= t('folders') ?>
                        </button>
                        <button onclick="filterByType('image')" class="filter-btn px-3 py-1 rounded-lg text-sm font-medium bg-gray-200 text-gray-700 hover:bg-purple-100 transition-all">
                            <?= t('images') ?>
                        </button>
                        <button onclick="filterByType('code')" class="filter-btn px-3 py-1 rounded-lg text-sm font-medium bg-gray-200 text-gray-700 hover:bg-purple-100 transition-all">
                            <?= t('code') ?>
                        </button>
                        <button onclick="filterByType('document')" class="filter-btn px-3 py-1 rounded-lg text-sm font-medium bg-gray-200 text-gray-700 hover:bg-purple-100 transition-all">
                            <?= t('documents') ?>
                        </button>
                        <button onclick="createNewFile()" class="px-3 py-1 rounded-lg text-sm font-medium bg-green-500 text-white hover:bg-green-600 transition-all">
                            <i class="fas fa-plus mr-1"></i><?= t('new_file') ?>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Toolbar -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-8">
                <!-- Create Folder -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-folder-plus text-purple-500 mr-2"></i><?= t('create_folder') ?>
                    </h3>
                    <form method="POST" class="space-y-3">
                        <input type="hidden" name="csrf_token" value="<?= generateCSRFToken() ?>">
                        <input type="text" name="dirname" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200" placeholder="<?= t('folder_name') ?>" required>
                        <button type="submit" name="mkdir" class="w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-medium py-3 rounded-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-plus mr-2"></i><?= t('create') ?>
                        </button>
                    </form>
                </div>

                <!-- File Upload -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-upload text-green-500 mr-2"></i><?= t('upload_file') ?>
                    </h3>
                    <form method="POST" enctype="multipart/form-data" class="space-y-3">
                        <input type="hidden" name="csrf_token" value="<?= generateCSRFToken() ?>">
                        <input type="file" name="upload[]" multiple class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200">
                        <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-medium py-3 rounded-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-cloud-upload-alt mr-2"></i><?= t('upload') ?>
                        </button>
                    </form>
                </div>

                <!-- ZIP Operations -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-file-zipper text-orange-500 mr-2"></i><?= t('zip_operations') ?>
                    </h3>
                    <form method="POST" enctype="multipart/form-data" class="space-y-3">
                        <input type="hidden" name="csrf_token" value="<?= generateCSRFToken() ?>">
                        <input type="file" name="zipupload" accept=".zip" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-200">
                        <button type="submit" class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-medium py-3 rounded-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-file-zipper mr-2"></i><?= t('extract_zip') ?>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Files Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6" id="filesGrid">
                <?php if ($currentDir): ?>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1" 
                        data-filename=".." 
                        data-filetype="folder">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-gray-400 to-gray-500 rounded-xl flex items-center justify-center mb-4">
                                <i class="fas fa-arrow-up text-white text-2xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-2 text-center"><?= t('parent_folder') ?></h3>
                            <p class="text-sm text-gray-500 mb-4 text-center"><?= t('go_up') ?></p>
                            <a href="?dir=<?= urlencode(dirname($currentDir)) ?>&lang=<?= $lang ?>" class="w-full bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-medium py-2 px-4 rounded-lg transition-all duration-200 text-center text-sm">
                                <i class="fas fa-arrow-up mr-2"></i><?= t('go') ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                $dirs = array_filter($files, function ($f) use ($path) { return is_dir($path . '/' . $f); });
                $files_only = array_filter($files, function ($f) use ($path) { return is_file($path . '/' . $f); });
                ?>

                <?php foreach ($dirs as $f): ?>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1" 
                        data-filename="<?= htmlspecialchars($f) ?>" 
                        data-filetype="folder">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-xl flex items-center justify-center mb-4">
                                <i class="fas fa-folder text-white text-2xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-1 text-center truncate w-full" title="<?= htmlspecialchars($f) ?>"><?= htmlspecialchars($f) ?></h3>
                            <p class="text-sm text-gray-500 mb-4"><?= t('folder') ?></p>
                            <div class="flex gap-2 w-full">
                                <a href="?dir=<?= urlencode(($currentDir ? $currentDir . '/' : '') . $f) ?>&lang=<?= $lang ?>" class="flex-1 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-2 px-2 rounded-lg transition-all duration-200 text-center text-xs">
                                    <i class="fas fa-folder-open"></i>
                                </a>
                                <a href="?delete=<?= urlencode($f) ?>&lang=<?= $lang ?>" onclick="return confirm('<?= htmlspecialchars($f) ?> <?= t('confirm_delete_folder') ?>')" class="flex-1 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-medium py-2 px-2 rounded-lg transition-all duration-200 text-center text-xs">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($files_only as $f): ?>
                    <?php
                    $file_ext = strtolower(pathinfo($f, PATHINFO_EXTENSION));
                    $file_path = $path . '/' . $f;
                    $file_size = formatFileSize(filesize($file_path));
                    $file_date = date('d.m.Y H:i', filemtime($file_path));
                    $file_type = getFileType($f);
                    
                    $icon_data = [
                        'jpg' => ['icon' => 'fa-file-image', 'color' => 'from-green-400 to-green-500'],
                        'jpeg' => ['icon' => 'fa-file-image', 'color' => 'from-green-400 to-green-500'],
                        'png' => ['icon' => 'fa-file-image', 'color' => 'from-green-400 to-green-500'],
                        'gif' => ['icon' => 'fa-file-image', 'color' => 'from-green-400 to-green-500'],
                        'mp4' => ['icon' => 'fa-file-video', 'color' => 'from-red-400 to-red-500'],
                        'avi' => ['icon' => 'fa-file-video', 'color' => 'from-red-400 to-red-500'],
                        'mov' => ['icon' => 'fa-file-video', 'color' => 'from-red-400 to-red-500'],
                        'mp3' => ['icon' => 'fa-file-audio', 'color' => 'from-purple-400 to-purple-500'],
                        'wav' => ['icon' => 'fa-file-audio', 'color' => 'from-purple-400 to-purple-500'],
                        'php' => ['icon' => 'fa-file-code', 'color' => 'from-blue-400 to-blue-500'],
                        'js' => ['icon' => 'fa-file-code', 'color' => 'from-blue-400 to-blue-500'],
                        'css' => ['icon' => 'fa-file-code', 'color' => 'from-blue-400 to-blue-500'],
                        'html' => ['icon' => 'fa-file-code', 'color' => 'from-blue-400 to-blue-500'],
                        'json' => ['icon' => 'fa-file-code', 'color' => 'from-blue-400 to-blue-500'],
                        'md' => ['icon' => 'fa-file-code', 'color' => 'from-blue-400 to-blue-500'],
                        'zip' => ['icon' => 'fa-file-zipper', 'color' => 'from-orange-400 to-orange-500'],
                        'rar' => ['icon' => 'fa-file-zipper', 'color' => 'from-orange-400 to-orange-500'],
                        'txt' => ['icon' => 'fa-file-lines', 'color' => 'from-gray-400 to-gray-500'],
                        'pdf' => ['icon' => 'fa-file-pdf', 'color' => 'from-red-400 to-red-500'],
                    ];
                    
                    $file_icon_data = $icon_data[$file_ext] ?? ['icon' => 'fa-file', 'color' => 'from-gray-400 to-gray-500'];
                    ?>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1" 
                        data-filename="<?= htmlspecialchars($f) ?>" 
                        data-filetype="<?= $file_type ?>">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-gradient-to-r <?= $file_icon_data['color'] ?> rounded-xl flex items-center justify-center mb-4">
                                <i class="fas <?= $file_icon_data['icon'] ?> text-white text-2xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-1 text-center truncate w-full" title="<?= htmlspecialchars($f) ?>"><?= htmlspecialchars($f) ?></h3>
                            <p class="text-xs text-gray-500 mb-1"><?= $file_size ?></p>
                            <p class="text-xs text-gray-400 mb-4"><?= $file_date ?></p>
                            <div class="flex gap-1 w-full">
                                <button onclick="viewFile('<?= htmlspecialchars($f) ?>')" class="flex-1 bg-gradient-to-r from-indigo-500 to-indigo-600 hover:from-indigo-600 hover:to-indigo-700 text-white font-medium py-2 px-2 rounded-lg transition-all duration-200 text-center text-xs">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="?action=download_file&file=<?= urlencode($f) ?>&dir=<?= urlencode($currentDir) ?>" class="flex-1 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-2 px-2 rounded-lg transition-all duration-200 text-center text-xs">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="?delete=<?= urlencode($f) ?>&lang=<?= $lang ?>" onclick="return confirm('<?= htmlspecialchars($f) ?> <?= t('confirm_delete_file') ?>')" class="flex-1 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-medium py-2 px-2 rounded-lg transition-all duration-200 text-center text-xs">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <div class="text-gray-400 mb-4">
                    <i class="fas fa-search text-6xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2"><?= $lang === 'tr' ? 'Sonuç Bulunamadı' : 'No Results Found' ?></h3>
                <p class="text-gray-500"><?= $lang === 'tr' ? 'Arama kriterlerinizi değiştirmeyi deneyin.' : 'Try changing your search criteria.' ?></p>
            </div>
        </main>

        <!-- File Editor Modal -->
        <div id="editorModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
            <div class="h-full flex flex-col">
                <div class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-edit text-white text-sm"></i>
                        </div>
                        <div>
                            <h2 id="editorTitle" class="text-lg font-semibold text-gray-900"><?= t('file_editor') ?></h2>
                            <p class="text-sm text-gray-500"><?= t('professional_editor') ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button id="saveBtn" onclick="saveFile()" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-sm font-medium rounded-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-save mr-2"></i><?= t('save') ?>
                        </button>
                        <button onclick="closeEditor()" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white text-sm font-medium rounded-lg transition-all duration-200 transform hover:scale-105">
                            <i class="fas fa-times mr-2"></i><?= t('close') ?>
                        </button>
                    </div>
                </div>
                
                <div class="flex-1 bg-gray-50 p-6">
                    <div class="h-full bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <textarea id="codeEditor" class="w-full h-full p-6 font-mono text-sm border-none resize-none focus:outline-none bg-gray-900 text-green-400" placeholder="<?= t('loading') ?>"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Media Preview Modal -->
        <div id="mediaModal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-2xl max-w-4xl max-h-[90vh] overflow-hidden">
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <h3 id="mediaTitle" class="text-lg font-semibold text-gray-900"><?= t('media_preview') ?></h3>
                    <button onclick="closeMediaModal()" class="text-gray-500 hover:text-gray-700 transition-colors">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div id="mediaContent" class="p-6 max-h-[calc(90vh-80px)] overflow-auto"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="text-sm text-gray-500 mb-4 sm:mb-0">
                        <p>&copy; 2024 <?= t('title') ?> - <?= t('developed_by') ?> <strong><?= t('company') ?></strong>. <?= t('all_rights_reserved') ?></p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button onclick="showKeyboardShortcuts()" class="text-sm text-gray-500 hover:text-purple-600 transition-colors">
                            <i class="fas fa-keyboard mr-1"></i><?= t('shortcuts') ?>
                        </button>
                        <button id="themeToggle" onclick="toggleTheme()" class="text-sm text-gray-500 hover:text-purple-600 transition-colors">
                            <i class="fas fa-moon"></i>
                        </button>
                        <span class="text-sm text-gray-400">v2.1.0</span>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            let currentFileName = '';
            let originalContent = '';
            const csrfToken = '<?= generateCSRFToken() ?>';
            
            // Search functionality
            function initializeSearch() {
                const searchInput = document.getElementById('searchInput');
                if (searchInput) {
                    searchInput.addEventListener('input', (e) => {
                        const searchTerm = e.target.value.toLowerCase();
                        const fileCards = document.querySelectorAll('[data-filename]');
                        const noResults = document.getElementById('noResults');
                        let visibleCount = 0;
                        
                        fileCards.forEach(card => {
                            const fileName = card.dataset.filename.toLowerCase();
                            if (fileName.includes(searchTerm) || searchTerm === '') {
                                card.style.display = '';
                                visibleCount++;
                            } else {
                                card.style.display = 'none';
                            }
                        });
                        
                        // Show/hide no results message
                        if (visibleCount === 0 && searchTerm !== '') {
                            noResults.classList.remove('hidden');
                        } else {
                            noResults.classList.add('hidden');
                        }
                    });
                }
            }
            
            // Filter by file type
            function filterByType(type) {
                const fileCards = document.querySelectorAll('[data-filetype]');
                const noResults = document.getElementById('noResults');
                let visibleCount = 0;
                
                fileCards.forEach(card => {
                    const fileType = card.dataset.filetype;
                    if (type === 'all' || fileType === type) {
                        card.style.display = '';
                        visibleCount++;                } else {
                        card.style.display = 'none';
                    }
                });
                
                // Show/hide no results message
                if (visibleCount === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
                
                // Update active filter button
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('bg-purple-500', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                
                event.target.classList.remove('bg-gray-200', 'text-gray-700');
                event.target.classList.add('bg-purple-500', 'text-white');
            }
            
            function viewFile(fileName) {
                const fileExt = fileName.split('.').pop().toLowerCase();
                const mediaTypes = {
                    'jpg': 'image', 'jpeg': 'image', 'png': 'image', 'gif': 'image',
                    'mp4': 'video', 'avi': 'video', 'mov': 'video',
                    'mp3': 'audio', 'wav': 'audio'
                };
                const isMedia = mediaTypes[fileExt] !== undefined;
                const isText = ['txt', 'php', 'js', 'css', 'json', 'html', 'md', 'xml', 'py', 'java', 'c', 'cpp', 'h', 'hpp'].includes(fileExt);
                
                if (isMedia) {
                    showMediaPreview(fileName, mediaTypes[fileExt]);
                } else if (isText) {
                    showEditor(fileName);
                } else {
                    Swal.fire({
                        icon: 'info',
                        title: t('preview_not_available'),
                        text: t('preview_not_supported'),
                        confirmButtonColor: '#3b82f6'
                    });
                }
            }
            
            function showMediaPreview(fileName, mediaType) {
                const modal = document.getElementById('mediaModal');
                const title = document.getElementById('mediaTitle');
                const content = document.getElementById('mediaContent');
                
                title.textContent = fileName;
                
                const currentDir = '<?= $currentDir ?>';
                const fullUrl = window.location.origin + window.location.pathname.replace(/\/[^\/]*$/, '/') + (currentDir ? currentDir + '/' : '') + fileName;
                
                let mediaHTML = '';
                if (mediaType === 'image') {
                    mediaHTML = `<img src="${fullUrl}" alt="${fileName}" class="max-w-full h-auto rounded-lg shadow-lg mx-auto">`;
                } else if (mediaType === 'video') {
                    mediaHTML = `<video controls class="max-w-full h-auto rounded-lg shadow-lg mx-auto"><source src="${fullUrl}" type="video/${fileName.split('.').pop()}"></video>`;
                } else if (mediaType === 'audio') {
                    mediaHTML = `
                        <div class="bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg p-8 text-center">
                            <i class="fas fa-music text-white text-6xl mb-4"></i>
                            <h3 class="text-white text-xl font-semibold mb-4">${fileName}</h3>
                            <audio controls class="w-full max-w-md mx-auto">
                                <source src="${fullUrl}" type="audio/${fileName.split('.').pop()}">
                            </audio>
                        </div>
                    `;
                }
                
                content.innerHTML = `<div class="text-center">${mediaHTML}</div>`;
                modal.classList.remove('hidden');
            }
            
            function showEditor(fileName) {
                currentFileName = fileName;
                const modal = document.getElementById('editorModal');
                const title = document.getElementById('editorTitle');
                const editor = document.getElementById('codeEditor');
                
                title.textContent = `${t('editing')} ${fileName}`;
                editor.value = t('loading');
                editor.disabled = true;
                
                modal.classList.remove('hidden');
                
                const currentDir = '<?= $currentDir ?>';
                fetch(`?action=view_file&file=${encodeURIComponent(fileName)}&dir=${encodeURIComponent(currentDir)}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.status === 'success') {
                            editor.value = data.content;
                            originalContent = data.content;
                            editor.disabled = false;
                            editor.focus();
                            
                            // Add syntax highlighting if available
                            if (window.hljs) {
                                hljs.highlightElement(editor);
                            }
                        } else {
                            throw new Error(data.message || t('file_not_found'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: t('error'),
                            text: error.message,
                            confirmButtonColor: '#dc2626'
                        });
                        closeEditor();
                    });
            }
            
            function saveFile() {
                if (!currentFileName) return;
                
                const editor = document.getElementById('codeEditor');
                const saveBtn = document.getElementById('saveBtn');
                const originalText = saveBtn.innerHTML;
                
                saveBtn.innerHTML = `<i class="fas fa-spinner fa-spin mr-2"></i>${t('saving')}`;
                saveBtn.disabled = true;
                
                const formData = new FormData();
                formData.append('csrf_token', csrfToken);
                formData.append('file_name', currentFileName);
                formData.append('content', editor.value);
                
                const currentDir = '<?= $currentDir ?>';
                
                fetch(`?action=save_file&dir=${encodeURIComponent(currentDir)}`, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status === 'success') {
                        originalContent = editor.value;
                        Swal.fire({
                            icon: 'success',
                            title: t('success'),
                            text: data.message,
                            confirmButtonColor: '#059669',
                            timer: 2000,
                            timerProgressBar: true
                        });
                    } else {
                        throw new Error(data.message || t('error'));
                    }
                })
                .catch(error => {
                    console.error('Save error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: t('error'),
                        text: error.message,
                        confirmButtonColor: '#dc2626'
                    });
                })
                .finally(() => {
                    saveBtn.innerHTML = originalText;
                    saveBtn.disabled = false;
                });
            }
            
            function closeEditor() {
                const editor = document.getElementById('codeEditor');
                const hasChanges = editor.value !== originalContent;
                
                if (hasChanges) {
                    Swal.fire({
                        title: t('unsaved_changes'),
                        text: t('unsaved_warning'),
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#dc2626',
                        cancelButtonColor: '#6b7280',
                        confirmButtonText: t('yes_exit'),
                        cancelButtonText: t('cancel')
                    }).then((result) => {
                        if (result.isConfirmed) {
                            resetEditor();
                        }
                    });
                } else {
                    resetEditor();
                }
            }
            
            function resetEditor() {
                document.getElementById('editorModal').classList.add('hidden');
                document.getElementById('codeEditor').value = '';
                currentFileName = '';
                originalContent = '';
            }
            
            function closeMediaModal() {
                document.getElementById('mediaModal').classList.add('hidden');
            }
            
            // Create new file
            function createNewFile() {
                Swal.fire({
                    title: t('create') + ' ' + t('new_file'),
                    input: 'text',
                    inputLabel: '<?= $lang === "tr" ? "Dosya adı" : "File name" ?>',
                    inputPlaceholder: 'example.txt',
                    showCancelButton: true,
                    confirmButtonText: t('create'),
                    cancelButtonText: t('cancel'),
                    inputValidator: (value) => {
                        if (!value) {
                            return '<?= $lang === "tr" ? "Dosya adı gerekli" : "File name is required" ?>';
                        }
                        if (!/^[a-zA-Z0-9._-]+$/.test(value)) {
                            return '<?= $lang === "tr" ? "Geçersiz dosya adı formatı" : "Invalid filename format" ?>';
                        }
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        const fileName = result.value;
                        currentFileName = fileName;
                        const modal = document.getElementById('editorModal');
                        const title = document.getElementById('editorTitle');
                        const editor = document.getElementById('codeEditor');
                        
                        title.textContent = `${t('editing')} ${fileName}`;
                        editor.value = '';
                        originalContent = '';
                        editor.disabled = false;
                        
                        modal.classList.remove('hidden');
                        editor.focus();
                    }
                });
            }
            
            // Keyboard shortcuts
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    if (!document.getElementById('editorModal').classList.contains('hidden')) {
                        closeEditor();
                    } else if (!document.getElementById('mediaModal').classList.contains('hidden')) {
                        closeMediaModal();
                    }
                }
                
                if (e.ctrlKey && e.key === 's' && !document.getElementById('editorModal').classList.contains('hidden')) {
                    e.preventDefault();
                    saveFile();
                }
                
                if (e.ctrlKey && e.key === 'n' && document.getElementById('editorModal').classList.contains('hidden')) {
                    e.preventDefault();
                    createNewFile();
                }
                
                if (e.key === 'F1') {
                    e.preventDefault();
                    showKeyboardShortcuts();
                }
                
                // Search focus with Ctrl+F
                if (e.ctrlKey && e.key === 'f') {
                    e.preventDefault();
                    document.getElementById('searchInput').focus();
                }
            });
            
            // Show keyboard shortcuts
            function showKeyboardShortcuts() {
                Swal.fire({
                    title: '<?= $lang === "tr" ? "Klavye Kısayolları" : "Keyboard Shortcuts" ?>',
                    html: `
                        <div class="text-left space-y-3">
                            <div class="flex justify-between items-center">
                                <span><kbd class="px-2 py-1 bg-gray-100 rounded text-sm">Ctrl + S</kbd></span>
                                <span class="text-sm">${t('save')} (<?= $lang === "tr" ? "editörde" : "in editor" ?>)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span><kbd class="px-2 py-1 bg-gray-100 rounded text-sm">Esc</kbd></span>
                                <span class="text-sm"><?= $lang === "tr" ? "Modları kapat" : "Close modals" ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span><kbd class="px-2 py-1 bg-gray-100 rounded text-sm">Ctrl + N</kbd></span>
                                <span class="text-sm">${t('new_file')}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span><kbd class="px-2 py-1 bg-gray-100 rounded text-sm">Ctrl + F</kbd></span>
                                <span class="text-sm"><?= $lang === "tr" ? "Arama odağı" : "Focus search" ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span><kbd class="px-2 py-1 bg-gray-100 rounded text-sm">F1</kbd></span>
                                <span class="text-sm"><?= $lang === "tr" ? "Bu yardım" : "This help" ?></span>
                            </div>
                        </div>
                    `,
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3b82f6'
                });
            }
            
            // Theme toggle
            function toggleTheme() {
                const currentTheme = localStorage.getItem('theme') || 'light';
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                
                localStorage.setItem('theme', newTheme);
                document.documentElement.setAttribute('data-theme', newTheme);
                
                const themeButton = document.getElementById('themeToggle');
                if (themeButton) {
                    themeButton.innerHTML = newTheme === 'light' ? 
                        '<i class="fas fa-moon"></i>' : 
                        '<i class="fas fa-sun"></i>';
                }
            }
            
            // Drag and Drop functionality
            const dropArea = document.querySelector('main');
            let dragCounter = 0;
            
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, e => {
                    e.preventDefault();
                    e.stopPropagation();
                    dragCounter++;
                    showDropOverlay();
                });
            });
            
            ['dragleave', 'dragend'].forEach(eventName => {
                dropArea.addEventListener(eventName, e => {
                    e.preventDefault();
                    e.stopPropagation();
                    dragCounter--;
                    if (dragCounter === 0) {
                        hideDropOverlay();
                    }
                });
            });
            
            dropArea.addEventListener('drop', e => {
                e.preventDefault();
                e.stopPropagation();
                dragCounter = 0;
                hideDropOverlay();
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    uploadFiles(files);
                }
            });
            
            function showDropOverlay() {
                if (!document.getElementById('dropOverlay')) {
                    const overlay = document.createElement('div');
                    overlay.id = 'dropOverlay';
                    overlay.className = 'fixed inset-0 bg-purple-500 bg-opacity-20 backdrop-blur-sm z-40 flex items-center justify-center';
                    overlay.innerHTML = `
                        <div class="bg-white rounded-2xl p-12 shadow-2xl border-2 border-dashed border-purple-400">
                            <i class="fas fa-cloud-upload-alt text-purple-500 text-6xl mb-4 block text-center"></i>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 text-center">${t('drop_files_here')}</h3>
                            <p class="text-gray-600 text-center">${t('files_auto_upload')}</p>
                        </div>
                    `;
                    document.body.appendChild(overlay);
                }
            }
            
            function hideDropOverlay() {
                const overlay = document.getElementById('dropOverlay');
                if (overlay) {
                    overlay.remove();
                }
            }
            
            function uploadFiles(files) {
                const formData = new FormData();
                formData.append('csrf_token', csrfToken);
                
                for (let i = 0; i < files.length; i++) {
                    if (files[i].size > <?= MAX_FILE_SIZE ?>) {
                        Swal.fire({
                            icon: 'warning',
                            title: t('file_too_large'),
                            text: `${files[i].name} ${t('max_file_size')} <?= formatFileSize(MAX_FILE_SIZE) ?>.`,
                            confirmButtonColor: '#f59e0b'
                        });
                        return;
                    }
                    formData.append('upload[]', files[i]);
                }
                
                Swal.fire({
                    title: t('uploading_files'),
                    html: `${files.length} ${t('files_uploading')}`,
                    allowOutsideClick: false,
                    didOpen: () => Swal.showLoading()
                });
                
                const currentDir = '<?= $currentDir ?>';
                const currentLang = '<?= $lang ?>';
                
                fetch(`?dir=${encodeURIComponent(currentDir)}&lang=${currentLang}`, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: t('success'),
                            text: t('upload_successful'),
                            confirmButtonColor: '#059669'
                        }).then(() => window.location.reload());
                    } else {
                        throw new Error(t('upload_failed'));
                    }
                })
                .catch(error => {
                    console.error('Upload error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: t('error'),
                        text: t('upload_failed'),
                        confirmButtonColor: '#dc2626'
                    });
                });
            }
            
            // Initialize everything on DOM content loaded
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize search
                initializeSearch();
                
                // Initialize theme
                const savedTheme = localStorage.getItem('theme') || 'light';
                document.documentElement.setAttribute('data-theme', savedTheme);
                
                const themeButton = document.getElementById('themeToggle');
                if (themeButton) {
                    themeButton.innerHTML = savedTheme === 'light' ? 
                        '<i class="fas fa-moon"></i>' : 
                        '<i class="fas fa-sun"></i>';
                }
                
                // Form validation
                const forms = document.querySelectorAll('form');
                forms.forEach(form => {
                    form.addEventListener('submit', function(e) {
                        const fileInputs = form.querySelectorAll('input[type="file"]');
                        fileInputs.forEach(input => {
                            if (input.files) {
                                for (let file of input.files) {
                                    if (file.size > <?= MAX_FILE_SIZE ?>) {
                                        e.preventDefault();
                                        Swal.fire({
                                            icon: 'warning',
                                            title: t('file_too_large'),
                                            text: `${file.name} ${t('max_file_size')} <?= formatFileSize(MAX_FILE_SIZE) ?>.`,
                                            confirmButtonColor: '#f59e0b'
                                        });
                                        return;
                                    }
                                }
                            }
                        });
                    });
                });
                
                // Add animation to cards
                const cards = document.querySelectorAll('.transform');
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                });
                
                cards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
                    observer.observe(card);
                });
                
                // Add loading spinner to buttons on click
                const buttons = document.querySelectorAll('button[type="submit"]');
                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        const originalText = this.innerHTML;
                        this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>' + this.textContent.trim();
                        this.disabled = true;
                        
                        // Re-enable after 3 seconds (fallback)
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.disabled = false;
                        }, 3000);
                    });
                });
            });
            
            // Advanced file operations
            function copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(() => {
                    Swal.fire({
                        icon: 'success',
                        title: '<?= $lang === "tr" ? "Kopyalandı!" : "Copied!" ?>',
                        text: '<?= $lang === "tr" ? "Panoya kopyalandı" : "Copied to clipboard" ?>',
                        timer: 1500,
                        showConfirmButton: false
                    });
                });
            }
            
            // Context menu (right-click functionality)
            document.addEventListener('contextmenu', (e) => {
                const fileCard = e.target.closest('[data-filename]');
                if (fileCard && fileCard.dataset.filename !== '..') {
                    e.preventDefault();
                    showContextMenu(e, fileCard);
                }
            });
            
            function showContextMenu(event, fileCard) {
                const fileName = fileCard.dataset.filename;
                const fileType = fileCard.dataset.filetype;
                
                const contextMenu = document.createElement('div');
                contextMenu.className = 'fixed bg-white border border-gray-200 rounded-lg shadow-lg z-50 py-2';
                contextMenu.style.left = event.pageX + 'px';
                contextMenu.style.top = event.pageY + 'px';
                
                const menuItems = [
                    { icon: 'fa-eye', text: '<?= $lang === "tr" ? "Görüntüle" : "View" ?>', action: () => viewFile(fileName) },
                    { icon: 'fa-download', text: '<?= $lang === "tr" ? "İndir" : "Download" ?>', action: () => window.location.href = `?action=download_file&file=${encodeURIComponent(fileName)}&dir=<?= urlencode($currentDir) ?>` },
                    { icon: 'fa-copy', text: '<?= $lang === "tr" ? "Adı Kopyala" : "Copy Name" ?>', action: () => copyToClipboard(fileName) },
                    { icon: 'fa-trash', text: '<?= $lang === "tr" ? "Sil" : "Delete" ?>', action: () => { if(confirm(`${fileName} <?= t('confirm_delete_file') ?>`)) window.location.href = `?delete=${encodeURIComponent(fileName)}&lang=<?= $lang ?>` } }
                ];
                
                menuItems.forEach(item => {
                    const menuItem = document.createElement('div');
                    menuItem.className = 'px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2';
                    menuItem.innerHTML = `<i class="fas ${item.icon} text-gray-500"></i><span>${item.text}</span>`;
                    menuItem.onclick = () => {
                        item.action();
                        document.body.removeChild(contextMenu);
                    };
                    contextMenu.appendChild(menuItem);
                });
                
                document.body.appendChild(contextMenu);
                
                // Remove context menu when clicking elsewhere
                setTimeout(() => {
                    document.addEventListener('click', function removeMenu() {
                        if (document.body.contains(contextMenu)) {
                            document.body.removeChild(contextMenu);
                        }
                        document.removeEventListener('click', removeMenu);
                    }, 100);
                });
            }
            
            // Error handling
            window.addEventListener('error', (e) => {
                console.error('JavaScript Error:', e.error);
            });
            
            // Service worker registration (for offline functionality)
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/sw.js').catch(err => {
                    console.log('Service Worker registration failed:', err);
                });
            }
        </script>

        <!-- CSS Styles -->
        <style>
            [data-theme="dark"] {
                --bg-primary: #1f2937;
                --bg-secondary: #374151;
                --text-primary: #f9fafb;
                --text-secondary: #d1d5db;
                --border-color: #4b5563;
            }
            
            [data-theme="dark"] body {
                background-color: var(--bg-primary);
                color: var(--text-primary);
            }
            
            [data-theme="dark"] .bg-white {
                background-color: var(--bg-secondary) !important;
            }
            
            [data-theme="dark"] .text-gray-900 {
                color: var(--text-primary) !important;
            }
            
            [data-theme="dark"] .text-gray-500 {
                color: var(--text-secondary) !important;
            }
            
            [data-theme="dark"] .border-gray-200 {
                border-color: var(--border-color) !important;
            }
            
            [data-theme="dark"] input, [data-theme="dark"] textarea {
                background-color: var(--bg-primary) !important;
                color: var(--text-primary) !important;
                border-color: var(--border-color) !important;
            }
            
            /* Enhanced animations */
            * {
                transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
            }
            
            .hover-lift:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }
            
            /* Loading animation */
            .loading-spinner {
                border: 2px solid #f3f4f6;
                border-top: 2px solid #8b5cf6;
                border-radius: 50%;
                width: 20px;
                height: 20px;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            
            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }
            
            ::-webkit-scrollbar-track {
                background: #f1f5f9;
            }
            
            ::-webkit-scrollbar-thumb {
                background: #8b5cf6;
                border-radius: 4px;
            }
            
            ::-webkit-scrollbar-thumb:hover {
                background: #7c3aed;
            }
            
            /* Responsive improvements */
            @media (max-width: 640px) {
                .grid {
                    grid-template-columns: repeat(1, minmax(0, 1fr));
                }
                
                .text-xs {
                    font-size: 0.7rem;
                }
                
                .gap-1 {
                    gap: 0.125rem;
                }
            }
            
            /* Animation for file cards */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .file-card {
                animation: fadeInUp 0.3s ease forwards;
            }
            
            /* Search highlight */
            .search-highlight {
                background-color: yellow;
                font-weight: bold;
            }
            
            /* Tooltip styles */
            .tooltip {
                position: relative;
            }
            
            .tooltip:hover::after {
                content: attr(data-tooltip);
                position: absolute;
                bottom: 100%;
                left: 50%;
                transform: translateX(-50%);
                background-color: #1f2937;
                color: white;
                padding: 0.5rem;
                border-radius: 0.375rem;
                font-size: 0.75rem;
                white-space: nowrap;
                z-index: 10;
            }
            
            /* Progress bar animation */
            .progress-bar {
                background: linear-gradient(90deg, #8b5cf6, #3b82f6);
                animation: progress 2s ease-in-out infinite;
            }
            
            @keyframes progress {
                0% { width: 0%; }
                50% { width: 70%; }
                100% { width: 100%; }
            }
            
            /* File type specific styling */
            .file-image { border-left: 4px solid #10b981; }
            .file-code { border-left: 4px solid #3b82f6; }
            .file-document { border-left: 4px solid #f59e0b; }
            .file-video { border-left: 4px solid #ef4444; }
            .file-audio { border-left: 4px solid #8b5cf6; }
            .file-archive { border-left: 4px solid #f97316; }
            
            /* Enhanced button hover effects */
            button:hover, .btn:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            }
            
            /* Glassmorphism effect for modals */
            .glass {
                background: rgba(255, 255, 255, 0.25);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.18);
            }
            
            /* Enhanced focus states */
            input:focus, textarea:focus, button:focus {
                outline: 2px solid #8b5cf6;
                outline-offset: 2px;
            }
        </style>
    </body>
    </html>