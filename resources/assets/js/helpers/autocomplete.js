import autocomplete from 'autocomplete.js'
import algolia from 'algoliasearch'

let index = algolia('SSHFAT8509', '78a7abb5f26aec8cd14bef38f75b7fa0')

export const userautocomplete = (selector, { hitsPerPage }) => {
    index = index.initIndex('users');

    return autocomplete(selector, {}, {
        source: autocomplete.sources.hits(index, {hitsPerPage: hitsPerPage}),
        displayKey: 'username',
        templates: {
            suggestion (suggestion) {
                return '<span>' + suggestion.username + '</span>';
            },
            empty: '<div class="aa-empty">No people found</div>'
        }
    })
}

