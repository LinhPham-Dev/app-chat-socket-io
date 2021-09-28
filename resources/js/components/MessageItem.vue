<template>
    <div v-if="$root.currentUserLogin.id == message.user.id">
        <div class="outgoing_msg">
            <div class="sent_msg">
                <p>
                    {{ message.message }}
                </p>
                <span class="user_name">{{ message.user.name }}</span>
                <span class="time_date"> 11:01 AM | June 9</span>
            </div>
        </div>
    </div>
    <div v-else>
        <div class="incoming_msg">
            <!-- Message Item -->
            <div class="incoming_msg_img">
                <img
                    src="https://ptetutorials.com/images/user-profile.png"
                    alt="sunil"
                />
            </div>
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>
                        {{ message.message }}
                    </p>
                    <span class="user_name">{{ message.user.name }}</span>
                    <span class="time_date"> 11:01 AM | June 9</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        message: {
            type: Object,
            default: {}
        }
    },
    methods: {}
};
</script>
