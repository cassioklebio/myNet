<template>
    <!-- Modal -->
<div class="modal fade" v-bind:id="nome" tabindex="-1" role="dialog" v-bind:aria-labelledby="nome" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{titulo}} </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <slot></slot>
            </div>
            <div class="modal-footer">
                <slot name="botoes"></slot>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['nome','titulo']

    }

</script>

<style>

</style>