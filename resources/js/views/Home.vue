<template>
    <el-row :gutter="20" class="">
        <el-col :span="12" :offset="6">
            <div class="buildings-search-page px-4 pb-4 rounded">
                <el-collapse>
                    <el-collapse-item ref="filters" title="Show filters" class="show-filters">
                        <search-form
                            :init-name="$route.query.name"
                            :init-price-from="$route.query.price_from ? parseInt($route.query.price_from) : null"
                            :init-price-to="$route.query.price_to ? parseInt($route.query.price_to) : null"
                            :init-count-bedrooms="$route.query.count_bedrooms ? parseInt($route.query.count_bedrooms) : null"
                            :init-count-bathrooms="$route.query.count_bathrooms ? parseInt($route.query.count_bathrooms) : null"
                            :init-count-storeys="$route.query.count_storeys ? parseInt($route.query.count_storeys) : null"
                            :init-count-garages="$route.query.count_garages ? parseInt($route.query.count_garages): null"
                            @filterData="refreshData"
                        ></search-form>
                        <el-row>
                            <el-button @click="collapseFilters" class="focus:outline-none">Hide filters</el-button>
                        </el-row>
                    </el-collapse-item>
                </el-collapse>

                <el-table
                    v-loading="showTableLoadingIndicator"
                    :data="buildings"
                    empty-text="No results were found"
                    stripe>
                    <el-table-column
                        prop="name"
                        label="Name"
                        min-width="180">
                    </el-table-column>
                    <el-table-column
                        prop="price"
                        label="Price">
                    </el-table-column>
                    <el-table-column
                        prop="count_bedrooms"
                        label="Bedrooms">
                    </el-table-column>
                    <el-table-column
                        prop="count_bathrooms"
                        label="Bathrooms">
                    </el-table-column>
                    <el-table-column
                        prop="count_storeys"
                        label="Storeys">
                    </el-table-column>
                    <el-table-column
                        prop="count_garages"
                        label="Garages">
                    </el-table-column>
                </el-table>
            </div>
        </el-col>
    </el-row>
</template>

<script>
import axios from 'axios';
import SearchForm from "../components/Buildings/SearchForm";

export default {
    name: "Home",

    components: {
        SearchForm
    },

    data() {
        return {
            showTableLoadingIndicator: true,
            buildings: []
        }
    },

    mounted() {
        this.refreshData({
            name: this.$route.query.name,
            price_from: this.$route.query.price_from,
            price_to: this.$route.query.price_to,
            count_bedrooms: this.$route.query.count_bedrooms,
            count_bathrooms: this.$route.query.count_bathrooms,
            count_storeys: this.$route.query.count_storeys,
            count_garages: this.$route.query.count_garages,
        });
    },

    methods: {
        collapseFilters() {
            this.$refs['filters'].handleHeaderClick();
        },

        /**
         * Gets the data from server and refreshes the table.
         *
         * @param params
         */
        refreshData(params) {
            let self = this;
            this.getBuildings(params)
                .then(data => {
                    self.buildings = data;
                    self.showTableLoadingIndicator = false;
                });
        },

        /**
         * Returns the buildings data from the server side.
         *
         * @param params
         * @return {Promise<AxiosResponse<array>>}
         */
        getBuildings(params) {
            return axios.get('/api/buildings', {params})
                .then(response => {
                    if (response.status === 200 && Array.isArray(response.data)) {
                        return response.data;
                    }

                    return [];
                });
        },

    }
}
</script>
