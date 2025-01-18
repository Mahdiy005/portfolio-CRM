<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <!-- navbar starts -->
    @include('partials.navbar')
    <!-- navbar ends here -->

    <!-- home section starts  -->
    @include('partials.landing')
    <!-- home section ends here -->

    <!-- expertise section starts -->
    @include('partials.expertise')
    <!-- expertise section ends here -->

    <!-- skill section starts -->
    @include('partials.skill')
    <!-- skill section end here -->

    <!-- portfolio section starts here -->
    @include('partials.work')
    <!-- portfolio section ends here -->

    <!-- testimonial section starts  -->
    @include('partials.testimonial')
    <!-- testimonial ends here -->

    <!-- blog section starts -->
    @include('partials.blog')
    <!-- blog section ends here -->

    <!-- contact section starts -->
    @include('partials.contact')
    <!-- contact section ends here -->

    <!-- now we will make back to top button when user click on it it will be redirected to top page  -->
    <x-return-btn><i class="bi bi-arrow-up"></i></x-return-btn>

    <!-- footer section starts  -->
    @include('partials.footer')
    <!-- footer section ends here -->

    <!-- bootstrap javascript cdn link  -->
    @include('partials.scripts')

</body>

</html>
