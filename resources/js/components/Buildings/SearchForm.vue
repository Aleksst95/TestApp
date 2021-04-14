<template>
    <el-form label-position="top" :model="form" :rules="rules" ref="form" size="mini" class="buildings-search-form">
        <el-form-item label="Name" prop="name">
            <el-input v-model="form.name"></el-input>
        </el-form-item>
        <el-form-item>
            <h3>Price</h3>
            <el-col :span="11" style="padding: 0">
                <el-form-item prop="priceFrom">
                    <el-input
                        v-model.number="form.priceFrom"
                        placeholder="From"
                        autocomplete="off"></el-input>
                </el-form-item>
            </el-col>
            <el-col class="line" :span="2">-</el-col>
            <el-col :span="11" style="padding: 0">
                <el-form-item prop="priceTo">
                    <el-input
                        v-model.number="form.priceTo"
                        placeholder="To"
                        autocomplete="off"></el-input>
                </el-form-item>
            </el-col>
        </el-form-item>
        <el-form-item>
            <el-col :span="6" style="padding-left: 0">
                <el-form-item prop="countBedrooms" label="Bedrooms">
                    <el-input
                        v-model.number="form.countBedrooms"
                        placeholder="Count of bedrooms"
                        autocomplete="off">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="6" style="padding-left: 0">
                <el-form-item prop="countBathrooms" label="Bathrooms">
                    <el-input
                        v-model.number="form.countBathrooms"
                        placeholder="Count of bathrooms"
                        autocomplete="off"></el-input>
                </el-form-item>
            </el-col>
            <el-col :span="6" style="padding-left: 0">
                <el-form-item prop="countStoreys" label="Storeys">
                    <el-input
                        v-model.number="form.countStoreys"
                        placeholder="Count of storeys"
                        autocomplete="off"></el-input>
                </el-form-item>
            </el-col>
            <el-col :span="6" style="padding: 0">
                <el-form-item prop="countGarages" label="Garages">
                    <el-input
                        v-model.number="form.countGarages"
                        placeholder="Count of garages"
                        autocomplete="off"></el-input>
                </el-form-item>
            </el-col>
        </el-form-item>
        <el-form-item>
            <el-button type="primary" class="focus:outline-none" @click="onSubmit">Filter</el-button>
            <el-button class="focus:outline-none" @click="resetForm()">Reset</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
export default {
    name: "search-form",

    props: {
        initName: String,
        initPriceFrom: Number,
        initPriceTo: Number,
        initCountBedrooms: Number,
        initCountBathrooms: Number,
        initCountStoreys: Number,
        initCountGarages: Number,
    },

    data() {
        let noRequiredIntegerValidator = (rule, value, callback) => {
            if (value.length === 0) {
                return callback();
            }

            if (!Number.isInteger(value)) {
                return callback(new Error('Please input digits'));
            }

            if (value < 0) {
                return callback(new Error('Number must be at least 0'));
            }

            return callback();
        };

        return {
            form: {
                name: '',
                priceFrom: '',
                priceTo: '',
                countBedrooms: '',
                countBathrooms: '',
                countStoreys: '',
                countGarages: ''
            },
            rules: {
                name: [
                    {min: 3, message: 'Length should have at least 3 characters', trigger: 'blur'}
                ],
                priceFrom: [
                    {validator: noRequiredIntegerValidator, trigger: 'blur'}
                ],
                priceTo: [
                    {validator: noRequiredIntegerValidator, trigger: 'blur'}
                ],
                countBedrooms: [
                    {validator: noRequiredIntegerValidator, trigger: 'blur'}
                ],
                countBathrooms: [
                    {validator: noRequiredIntegerValidator, trigger: 'blur'}
                ],
                countStoreys: [
                    {validator: noRequiredIntegerValidator, trigger: 'blur'}
                ],
                countGarages: [
                    {validator: noRequiredIntegerValidator, trigger: 'blur'}
                ]
            }
        };
    },

    mounted() {
        this.form.name = this.initName;
        this.form.priceFrom = this.initPriceFrom;
        this.form.priceTo = this.initPriceTo;
        this.form.countBedrooms = this.initCountBedrooms;
        this.form.countBathrooms = this.initCountBathrooms;
        this.form.countStoreys = this.initCountStoreys;
        this.form.countGarages = this.initCountGarages;
    },

    methods: {
        onSubmit() {
            let params = {};

            if (this.form.name) {
                params.name = this.form.name;
            }

            if (this.form.priceFrom) {
                params.price_from = this.form.priceFrom;
            }

            if (this.form.priceTo) {
                params.price_to = this.form.priceTo;
            }

            if (this.form.countBedrooms) {
                params.count_bedrooms = this.form.countBedrooms;
            }

            if (this.form.countBathrooms) {
                params.count_bathrooms = this.form.countBathrooms;
            }

            if (this.form.countStoreys) {
                params.count_storeys = this.form.countStoreys;
            }

            if (this.form.countGarages) {
                params.count_garages = this.form.countGarages;
            }

            this.$emit('filterData', params);
        },

        resetForm() {
            this.$refs['form'].resetFields();
        }
    }
}
</script>

<style scoped>

</style>
