jQuery(function ($) {
    $(".open_submit").click(function () {
        var input = $(this).siblings("input").val();
        var div = $(this).parent().children(".radio");
        var value = div.find("input:checked").val();
        Search(value, input);
    });

    function Search(value, input) {
        switch (value) {
            case "0":
                window.open("http://openlibrary.org/search?q=" + input + "");
                break;
            case "1":
                window.open("http://www.souoa.com/search.asp?q=" + input + "");
                break;
            case "2":
                window.open("http://www.doaj.org/doaj?func=search&template=&uiLanguage=en&query=" + input + "");
                break;
            case "3":
                window.open("http://gooa.las.ac.cn/external/paper.jsp?pa=kwd_t=" + encodeURI(encodeURI(input)) + "");
                break;
        }
    }
});

