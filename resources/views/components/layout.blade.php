<!DOCTYPE html>
<html lang="en">

<x-head />
<title>{{ $heading ?? 'Dashboard' }}</title>

<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar Wrapper -->
        <x-sidebar /> <!-- Loads the sidebar content from sidebar.blade.php -->

        <!-- Main Content Wrapper -->
        <main class="flex-1 p-4 sm:p-6 overflow-auto">
            {{ $slot }} <!-- This is where content from index.blade.php will be displayed -->
        </main>
    </div>
</body>

</html>
