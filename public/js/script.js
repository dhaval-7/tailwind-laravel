$(document).ready(function () {

    const searchInput = $("#search-input");
    const searchResults = $("#search-results");

    const resultTemplate = $('#result-template').html();

    searchInput.on("input", function () {
        const query = $(this).val();
        if (query.length > 0 && query.length < 15) {
            // Clear previous results
            searchResults.empty();

            // Make an Ajax request
            $.ajax({
                url: `/search/${query}`,
                method: "GET",
                success: function (data) {
                    // Process the data and display results
                    data.forEach(function (result) {
                        const listItem = $(resultTemplate);
                        listItem.find('.result-text').text(result.name);
                        searchResults.append(listItem);
                    });
                    if (data.length == 0) {
                        searchResults.empty();
                        const listItem = $(resultTemplate);
                        listItem.find('.result-text').text('No Result Found');
                        searchResults.append(listItem);
                    }
                },
                error: function (error) {
                    console.error("Error fetching search results:", error);
                },
            });
        }else{
            searchResults.empty();

        }
    });
});
