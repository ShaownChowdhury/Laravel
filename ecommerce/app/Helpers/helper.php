<?php


if (!function_exists("getProfileImage")) {
    function getProfileImage()
    {
        if (auth()->check()) {
            if (auth()->user()->profile) {
                return auth()->user()->profile;
            } else {
                return "https://api.dicebear.com/8.x/initials/svg?seed=" . auth()->user()->name;
            }
        }
    }
}