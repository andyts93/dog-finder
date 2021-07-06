const InfiniteScroll = require('infinite-scroll');

const infScroll = new InfiniteScroll('.ads-container', {
    path: '.next-page',
    append: '.ad-card-wrapper',
    scrollThreshold: 400,
    status: '.page-load-status'
});
console.log(infScroll);
