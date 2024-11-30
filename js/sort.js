function changeSortOrder(currentSort){
    // debugger;
    var newSort = currentSort === 'asc' ? 'desc' : 'asc';
    const mainUrl = window.location.href.split('?')[0]; 
    window.location.href = `${mainUrl}?sort=${newSort}`;

};
