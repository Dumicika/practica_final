@extends('layouts.guest')

@section('content')
  <section class="big-map">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1030.4945393529008!2d28.18743321953205!3d45.900948652548735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65db775628177%3A0x3eb9667f8dbcdc13!2sMILAV%20IT!5e0!3m2!1sro!2s!4v1717274391390!5m2!1sro!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form-container">
            <h2 class="text-white">Scrie-ne un mesaj</h2>
            <form>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <textarea name="message" placeholder="Message" rows="4" required></textarea>
                <button type="submit">Send Message<i class="fa-solid fa-arrow-right"></i></button>
            </form>
        </div>
    </section>

@endsection