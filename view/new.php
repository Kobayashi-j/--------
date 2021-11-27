<?php include "controller/include/new.php" ?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=<?= $_ENV['MAP_API_KEY'] ?>&libraries=places"></script>
    <script src="../view/js/new.js"></script>

    <title>新規作成</title>
</head>

<body>
    <div class="fixed bg-white top-0 w-full lg:px-64">
        <div class="border-b border-gray-400 text-center py-3 font-bold">
            新規投稿
        </div>
        <!--php:$_SERVER['HTTP_REFERER']実装-->
        <a href="/?home" class="absolute top-0 p-3">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    <!--
    <div class="p-3">
        <p class="text-lg"><i class="fas fa-map-marker-alt"></i>&nbsp;アカウント・場所</p>
        <input type="text" name="place" placeholder="どこで？" class="w-full bg-transparent outline-none border-b border-gray-400" />
        <div class="j-autocomplete">
        </div>
    </div>
    -->
    <div class="pt-20 lg:px-64 px-4">
        <form action="/?new=2" method="post">
            <input type="hidden" name="place_id">
            <input type="hidden" name="place">
            <div class="flex bg-gray-50 border border-gray-200 rounded-md mb-2">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-map-marker-alt text-gray-500"></i>
                </span>
                <input type="text" name="keyword" placeholder="場所を検索" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" value="<?= isset($_POST["place"]) ? $_POST["place"] : '' ?>" required />
            </div>
            <ul class="j-autocomplete border rounded-md border-gray-200 cursor-pointer hidden">
            </ul>
            <input type="button" value="次へ" class="mt-4 mb-20 py-2 px-4 bg-gray-400 text-white border border-gray-200 rounded-2xl float-right j-submit" disabled onclick="submit();" />
        </form>
    </div>

    </div>
    <!-- Tabs -->
    <div class="fixed w-full bottom-0 lg:px-64">
        <div id="" class="flex w-full bg-white border-t border-gray-400">
            <a href="/?home" class="flex-grow flex items-center justify-center">
                <i class="fas fa-home text-xl"></i>
            </a>
            <a href="/?<?= $_SESSION["userid"] ?>" class="flex-grow flex items-center justify-center py-3">
                <img src="../view/img/user.png" alt="" class="inline-block w-8 rounded-full border border-black">
            </a>
            <a href="/?new" class="flex-grow flex items-center justify-center">
                <i class="far fa-edit text-xl text-yellow-600"></i>
            </a>
        </div>
    </div>
</body>

</html>