<?php
/**
 * Define a Couchbase query.
 *
 * @package Couchbase
 * @license Apache 2.0
 */

/*
TODO: Add query options and different languages.
*/

namespace Couchbase
{
    class AllDocsView extends View
    {
        /**
         * Constructor, fake ddoc and view names
         */
        function __construct()
        {
            parent::__construct("_builtin", "_all_docs");
        }

        /**
         * Return a Couchbase query result.
         *
         * Overrides the parent's method to query `_all_docs` instead of a custom
         * view.
         *
         * @param array $options Optional associative array of view options.
         *
         * @return Couchbase_ViewResult
         */
        function getResult($options = array())
        {
            return new ViewResult(
                $this->db->couchdb->allDocs($options)
            );
        }
    }
}