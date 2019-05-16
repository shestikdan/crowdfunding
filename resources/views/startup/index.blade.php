@extends('layouts.app')

@section('content')
    <tinder-startup-component></tinder-startup-component>
@endsection

<style>
    *{
        padding: 0;
        margin: 0;
    }
    img{
        max-width: 100%;
    }
    html{
        font-size: 2vw;
        background: linear-gradient(65.75deg, #23A4DD 0%, #4EC8FF 100%);}

    .tind{
        display: grid;
        grid-template-columns: 2fr 1fr;
        background: #fff;
        box-shadow: 0px 5px 35px rgba(0, 0, 0, 0.35);
        border-radius: 25px;
        left: 10rem;
        top: 3rem;
        position: relative;
        width: 28rem;
        padding: 1rem;
        z-index: 3;
    }
    .tind-info{
        display: grid;
        grid-template-columns: 3fr 1fr;
        height: 2.5rem;
        padding-top: .5rem;
    }
    .tind-info-inner{
        display: grid;
        grid-gap: .5rem;
    }
    .tind-info-inner h1{
        font-family: Roboto;
        font-style: normal;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.35);
        font-size: 1rem;
    }
    .tind-info-inner p{
        align-self: center;
        font-family: Roboto;
        font-style: normal;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.85);
        font-size: .7rem;
    }
    .tind-buttons{
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: .5rem;
    }
    .tind-buttons a{
        display: grid;
        align-items: center;
        justify-items: center;
    }
    .tind-buttons a:nth-child(1){
        border: 2px solid #A2C83A;
        box-sizing: border-box;
        border-radius: 5px;
        text-decoration: none;
        color: rgba(0, 0, 0, 0.65);
        font-family: Roboto;
        font-size: .5rem;
    }
    .tind-buttons a:nth-child(2){
        border-radius: 5px;
        background: #23A4DD;
        text-decoration: none;
        color: #fff;
        font-family: Roboto;
        font-size: .5rem;
    }
    .tind-project{
        width: 100%;
        height: 12.5rem;
        border-radius: 10px;
    }
    .tind-battery{
        background: url('/assets/img/battery.svg');
        background-repeat: no-repeat;
        background-size: cover;
        margin-left: 1rem;
        padding: 1rem;
        display: grid;
    }
    .tind-battery-button{
        background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #23A4DD;
        border-radius: 5px;
        color: #23A4DD;
        font-family: Roboto;
        font-weight: 500;
        font-size: .5rem;
        text-decoration: none;
        display: grid;
        justify-items: center;
        align-items: center;
        height: 1rem;
        margin: 0 1.2rem;
        margin-top: 13rem;
        width: 4rem;
        z-index: 1;
        position: absolute;
        left: 21.66rem;
    }
    .tind-battery-liquid{
        position: relative;
        z-index: 1;
        align-self: end;
    }
    .tind-battery-inner-text{
        position: absolute;
        display: grid;
        justify-items: center;
        width: 7.5rem;
        margin-top: 7rem;
        color: #fff;
        z-index: 1;
        left: 21rem
    }
    .tind-battery-inner-text p{
        font-size: .5rem;
        font-family: Roboto;
    }
    .tind-battery-inner-text h1{
        font-size: 1rem;
        font-family: Roboto;
    }
    .yes{
        background: url('/assets/img/yes.svg');
        position: absolute;
        right: 7rem;
        top: 12rem;
        background-size: cover;
        border: none;
        width: 5rem;
        z-index: 1;
        cursor: pointer;
        outline: none;
        height: 5rem;
    }
    .yes:hover{
        transform: scale(1.1);
        transition: .2s;
    }
    .no{
        background: url('/assets/img/no.svg');
        background-size: cover;
        border: none;
        cursor: pointer;
        position: absolute;
        outline: none;
        width: 5rem;
        height: 5rem;
        z-index: 1;
        left: 7rem;
        top: 12rem;
    }
    .no:hover{
        transform: scale(1.1);
        transition: .2s;
    }
    .backleft{
        position: absolute;
        top: 5rem;
        left: 8rem;
        height: 18rem;
        transition: .2s;
    }
    .backright{
        position: absolute;
        top: 5rem;
        right: 8rem;
        height: 18rem;
        transition: .2s;
    }

</style>
