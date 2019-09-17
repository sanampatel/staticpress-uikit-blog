<template>
    <div>
        <div>
            <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input" type="search" id="search" v-model="query" placeholder="Search posts here..." @keyup.esc="reset"
                        @blur="reset">
                    </form>
                </div>
                <a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
            </div>
            <div>
                <div v-if="query" class="absolute" style="border: 1px solid #b1abf5; border-top: none; z-index: 2;background: white; box-shadow: 0 -1px 27px 0 rgba(0, 0, 0, .04), 0 4px 15px 0 rgba(0, 0, 0, .08);">
                    <ul class="uk-list navlist" style="margin-bottom: 0">
                        <li v-for="(result, index) in results" style="border-bottom: 1px solid #eee; padding: 12px; margin: 0">
                            <a
                                :href="result.link"
                                :title="result.title"
                                :key="result.link"
                                @mousedown.prevent>
                               {{ result.title }}
                            </a>
                        </li>
                        <li
                            v-if="! results.length">
                            <div>No results for <strong>{{ query }}</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>       
    </div>
</template>

<script>
export default {
    data() {
        return {
            fuse: null,
            searching: false,
            query: '',
        };
    },
    computed: {
        results() {
            return this.query ? this.fuse.search(this.query) : [];
        },
    },
    methods: {
      
        reset() {
            this.query = '';
            this.searching = false;
        },
    },
    created() {
        axios('/index.json').then(response => {
            this.fuse = new fuse(response.data, {
                minMatchCharLength: 6,
                keys: ['title', 'snippet', 'categories', 'tags'],
            });
        });
    },
};
</script>