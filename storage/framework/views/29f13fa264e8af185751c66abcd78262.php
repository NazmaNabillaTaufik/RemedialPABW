<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFinder Bandung</title>
    <style>
        /* Reset & Base Styles */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; background-color: #f4f7f6; color: #333; line-height: 1.6; }
        .container { width: 90%; max-width: 1100px; margin: auto; overflow: hidden; padding: 20px; }

        /* Header Aesthetic */
        header { background: #2c3e50; color: #ffffff; padding: 30px 0; text-align: center; border-bottom: 4px solid #3498db; }
        header h1 { margin: 0; font-size: 1.8rem; letter-spacing: 1px; }

        /* Modern Table */
        table { width: 100%; border-collapse: collapse; margin: 25px 0; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        table thead tr { background-color: #3498db; color: #ffffff; text-align: left; font-weight: bold; }
        table th, table td { padding: 15px 20px; border-bottom: 1px solid #eee; }
        table tbody tr:hover { background-color: #f9f9f9; transition: 0.3s; }
        
        /* Typography */
        h2 { color: #2c3e50; border-left: 5px solid #3498db; padding-left: 15px; margin-top: 30px; }
        
        /* Footer */
        footer { text-align: center; padding: 20px; background: #2c3e50; color: white; margin-top: 40px; font-size: 0.9rem; }
    </style>
</head>
<body>
    <header>
        <h1>JobFinder – Portal Lowongan Kerja Kabupaten Bandung</h1>
    </header>

    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>© 2025 JobFinder Bandung</p>
    </footer>
</body>
</html><?php /**PATH D:\SEMESTER3\PABW\jobfinder\resources\views/layouts/main.blade.php ENDPATH**/ ?>