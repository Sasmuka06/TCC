<style>
   footer {
            word-wrap: break-word;
            overflow-wrap: break-word;
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(10px);
            color: #333;
            padding: 40px 0; 
            width: 100vw; 
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
            margin-top: 40px;
            z-index: 1;
            display: flex;
        }

       
        footer .footer-content {
            margin-left: 240px;
            padding: 0 20px;
            max-width: calc(100vw - 240px);
        }

        footer p,
        footer li,
        footer small {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }

        footer a {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s ease, background-color 0.3s ease;
            padding: 2px 4px;
            border-radius: 4px;
        }

        footer a:hover {
            background-color: rgba(108, 117, 125, 0.1);
            color: #495057;
        }

        footer h5 {
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        footer .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(108, 117, 125, 0.1);
            transition: all 0.3s ease;
        }

        footer .social-links a:hover {
            background: #495057;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
            
            footer .footer-content {
                margin-left: 0;
                padding: 0 15px;
                max-width: 100%;
            }
        }

</style>



 <footer>
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5 class="text-center">Sobre Nós</h5>
                        <p class="text-center">
                            Somos uma empresa comprometida com a inovação, a qualidade e a excelência no atendimento. 
                            Trabalhamos para oferecer soluções eficientes e confiáveis, sempre priorizando a experiência 
                            e a satisfação de nossos clientes.
                        </p>
                    </div>
                    <div class="col-md-2 mb-4">
                        <h5 class="text-center">Links Úteis</h5>
                        <ul class="list-unstyled text-center">
                            <li class="mb-2"><a href="#" class="text-decoration-none">Sobre nós</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none">Fale Conosco</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none">Termos de uso</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none">Privacidade</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h5 class="text-center">Contato</h5>
                        <ul class="list-unstyled text-center">
                            <li class="mb-2">
                                <i class="fas fa-map-marker-alt me-2"></i>Rua Exemplo, 123 – Cidade, UF
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-phone me-2"></i>(11) 99999-9999
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-envelope me-2"></i>contato@empresa.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-4">
                        <h5 class="text-center">Redes Sociais</h5>
                        <div class="social-links text-center">
                            <a href="#" class="me-3">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="me-3">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="me-3">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <hr class="my-4">
                
                <div class="row">
                    <div class="col text-center">
                        <small>&copy; 2025 LarratsCorporation. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>