<template>
    <el-container>
        <el-header>
            <el-row :gutter="20">
                <el-col :span="12" :offset="6" class="my-4">
                    Test application
                </el-col>
            </el-row>
        </el-header>
        <el-main>
            <router-view></router-view>
        </el-main>
    </el-container>
</template>
