<!DOCTYPE html>
<html lang="en">
<head>
    <title>Psychology Test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap5.8.min.css">
</head>
<body>
    <!-- Attractive Header -->
    <header class="bg-primary text-white text-center py-5">
        <h1 class="display-4 fw-bolder">Welcome to the Psychology Test</h1>
        <p class="lead">Answer the following 12 questions to learn more about yourself!</p>
    </header>

    <!-- Main Quiz Section -->
    <main class="container my-5">
        <form id="quiz-form" class="bg-light p-5 rounded shadow-sm">
            <h2 class="text-center mb-4">Psychology Quiz</h2>

            <div class="row text-center">
                <div class="col-6">
                    <!-- Question 1 -->
                    <div class="mb-4">
                        <label class="form-label border rounded p-4 shadow-sm mb-2 fw-bold h4">1. How often do you feel stressed?</label>

                        <!-- Option 1 -->
                        <div class="border rounded p-2 shadow-sm mb-2">
                            <input type="radio" id="q1-a1" name="q1" value="Always" class="form-check-input">
                            <label for="q1-a1" class="form-check-label">Always</label>
                        </div>

                        <!-- Option 2 -->
                        <div class="border rounded p-2 shadow-sm mb-2">
                            <input type="radio" id="q1-a2" name="q1" value="Often" class="form-check-input">
                            <label for="q1-a2" class="form-check-label">Often</label>
                        </div>

                        <!-- Option 3 -->
                        <div class="border rounded p-2 shadow-sm mb-2">
                            <input type="radio" id="q1-a3" name="q1" value="Sometimes" class="form-check-input">
                            <label for="q1-a3" class="form-check-label">Sometimes</label>
                        </div>

                        <!-- Option 4 -->
                        <div class="border rounded p-2 shadow-sm">
                            <input type="radio" id="q1-a4" name="q1" value="Rarely" class="form-check-input">
                            <label for="q1-a4" class="form-check-label">Rarely</label>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <!-- Question 2 -->
                    <div class="mb-4">
                        <label class="form-label">2. How do you handle difficult situations?</label>
                        <div>
                            <input type="radio" id="q2-a1" name="q2" value="Calmly" class="form-check-input">
                            <label for="q2-a1" class="form-check-label">Calmly</label>
                        </div>
                        <div>
                            <input type="radio" id="q2-a2" name="q2" value="Anxiously" class="form-check-input">
                            <label for="q2-a2" class="form-check-label">Anxiously</label>
                        </div>
                        <div>
                            <input type="radio" id="q2-a3" name="q2" value="With anger" class="form-check-input">
                            <label for="q2-a3" class="form-check-label">With anger</label>
                        </div>
                        <div>
                            <input type="radio" id="q2-a4" name="q2" value="With optimism" class="form-check-input">
                            <label for="q2-a4" class="form-check-label">With optimism</label>
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- Repeat similar structure for the remaining questions -->
            
            <!-- Questions 3 to 12 (Same structure with different text and options) -->

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Submit Quiz</button>
            </div>
        </form>
    </main>

    <!-- Bootstrap JS (for proper functionality of components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.8.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
